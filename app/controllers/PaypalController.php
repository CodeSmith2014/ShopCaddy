<?php
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class PaypalController extends BaseController
{
    private $_api_context;

    public function __construct(){
        // setup PayPal api context
        $paypal_conf = Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function postPayment(){
        $message = array(
            'paypal-amount.required' => 'Choose the amount you wish to top up.',
            'paypal-amount.integer' => 'The amount chosen is invalid.'
            );
        $rules = array(
            'paypal-amount' => 'required|integer',
            );
        $validator = Validator::make(Input::all(), $rules, $message);
        if($validator->fails()){
            return Redirect::route('credits')->withErrors($validator);
        }else{
            $total = (Input::get('paypal-amount')*1.039)+0.50;

            $payer = new Payer();
            $payer->setPaymentMethod('paypal');

            $item_1 = new Item();
            $item_1->setName('Shop Caddy Credit Purchase')
            ->setCurrency('SGD')
            ->setQuantity(1)
            ->setPrice($total);

            // add item to list
            $item_list = new ItemList();
            $item_list->setItems(array($item_1));

            $amount = new Amount();
            $amount->setCurrency('SGD')
            ->setTotal($total);

            $transaction = new Transaction();
            $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

            $redirect_urls = new RedirectUrls();
            $redirect_urls->setReturnUrl(URL::route('paypal_topup.status'))
            ->setCancelUrl(URL::route('credits'));

            $payment = new Payment();
            $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));

            try {
                $payment->create($this->_api_context);
            } catch (\PayPal\Exception\PPConnectionException $ex) {
                if (\Config::get('app.debug')) {
                    echo "Exception: " . $ex->getMessage() . PHP_EOL;
                    $err_data = json_decode($ex->getData(), true);
                    exit;
                } else {
                    die('Some error occur, sorry for inconvenient');
                }
            }

            foreach($payment->getLinks() as $link) {
                if($link->getRel() == 'approval_url') {
                    $redirect_url = $link->getHref();
                    break;
                }
            }

            // add payment ID to session
            Session::put('paypal_payment_id', $payment->getId());

            if(isset($redirect_url)) {
            // redirect to paypal
                return Redirect::away($redirect_url);
            }

            return Redirect::route('credits')
            ->with('error', 'Unknown error occurred');
        }
    }

    public function getPaymentStatus(){
        // Get the payment ID before session clear
        $payment_id = Session::get('paypal_payment_id');

        // clear the session payment ID
        Session::forget('paypal_payment_id');

        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            return Redirect::route('credits')
            ->with('error', 'Credit Top-up failed');
        }

        $payment = Payment::get($payment_id, $this->_api_context);

        // PaymentExecution object includes information necessary 
        // to execute a PayPal account payment. 
        // The payer_id is added to the request query parameters
        // when the user is redirected from paypal back to your site
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        //Execute the payment
        $result = $payment->execute($execution, $this->_api_context);
        // payment made
        if ($result->getState() == 'approved') { 
            $transaction = $result->getTransactions();
            $credit = new Credit;
            $credit->method = 2;
            $credit->amount = $transaction[0]->getAmount()->getTotal();
            $credit->member_id = Sentry::getUser()->id;
            $credit->verifier_id = 0;
            $credit->topup_datetime = date('Y-m-d H:i',time());
            $credit->verify_datetime = date('Y-m-d H:i',time());
            $credit->touch();
            $credit->save();
            $member = Sentry::getUser();
            $member->balance = $member->balance + ceil(($transaction[0]->getAmount()->getTotal()-0.50)*0.961);
            $member->save();
            return Redirect::route('credits')
            ->with('message', 'Credit Top-up Success');
        }
        return Redirect::route('credits')
        ->with('error', 'Credit Top-up failed');
    }
}