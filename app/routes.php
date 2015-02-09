<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/',function(){
// 	$i = Item::where('status_code',1)->where('member_id',1)->get();
// 	foreach($i as $ii){
// 		echo $ii->name."<br/>";
// 	}
// });

# CSRF Protection
Route::when('*', 'csrf', ['POST', 'PUT', 'PATCH', 'DELETE']);

# Static Pages. Redirect user so user cannot access these pages
Route::group(['before' => 'redirectUser'], function()
{
	Route::get('/', ['as' => 'home', 'uses' => 'HomeController@getHome']);
	Route::get('about-us', ['as' => 'about-us', 'uses' => 'HomeController@getAboutUs']);
	Route::get('contact-us', ['as' => 'contact', 'uses' => 'HomeController@getContact']);
	Route::get('faq', ['as' => 'faq', 'uses' => 'HomeController@getFaq']);
	Route::get('services-charges', ['as' => 'services-charges', 'uses' => 'HomeController@getServicesCharges']);
	Route::get('shipping-calculator', ['as' => 'shipping-calculator', 'uses' => 'HomeController@getShippingCalculator']);
	Route::get('prohibited-items', ['as' => 'prohibited-items', 'uses' => 'HomeController@getProhibitedItems']);
	Route::get('terms-conditions', ['as' => 'terms-conditions', 'uses' => 'HomeController@getTermsConditions']);
	Route::get('privacy-policy', ['as' => 'privacy-policy', 'uses' => 'HomeController@getPrivacyPolicy']);
});

# Registration



# Authentication
Route::get('login', ['as' => 'login', 'uses' => 'SessionController@create'])->before('guest');
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionController@destroy']);
Route::resource('sessions', 'SessionController', ['only' => ['create','store','destroy']]);

# Forgotten Password



/*
|--------------------------------------------------------------------------
| Members Area
|--------------------------------------------------------------------------
|
|	These are the routes that require members to login first before
|	they can access to these pages.  
|
|
*/

# Member Routes
Route::group(['before' => 'auth|standardMember'], function()
{
	Route::get('memberProtected', 'StandardMemberController@getMemberProtected');
	Route::get('services/assisted-purchase', ['as' => 'assisted-purchase', 'uses' => 'StandardMemberController@getAssistedPurchase']);

	Route::group(array('prefix' => 'account'), function()
	{
		Route::get('/', array(
			"as"=>"account",function(){
				return View::make('frontend.member.account.account');
			}));

		Route::get('edit-name', array(
			"as"=>"edit-name",function(){
				return View::make('frontend.member.account.edit-name');
			}));

		Route::get('edit-email', array(
			"as"=>"edit-email",function(){
				return View::make('frontend.member.account.edit-email');
			}));

		Route::get('edit-mobile-no', array(
			"as"=>"edit-mobile",function(){
				return View::make('frontend.member.account.edit-mobile');
			}));
		Route::get('addresses', array(
			"as"=>"addresses",function(){
				return View::make('frontend.member.account.address');
			}));
	});

	Route::group(array('prefix' => 'credits'), function()
	{
		Route::get('/', ['as' => 'credits', 'uses' => 'StandardMemberController@getCredits']);
		Route::post('transactions', ['as' => 'transactions', 'uses' => 'TransactionController@getTransactions']);
		Route::post('paypal_topup', array(
			'as' => 'paypal_topup',
			'uses' => 'PaypalController@postPayment',
			));
		Route::get('paypal_topup/status', array(
			'as' => 'paypal_topup.status',
			'uses' => 'PaypalController@getPaymentStatus',
			));
		Route::resource('ibank','IbankController');
	});


# Services Routes
	Route::group(array('prefix'=>'services'),function()
	{
		Route::post('assisted-purchase/checkout', array(
			"as"=>"doCheckout",
			"uses"=>"AssistPurchaseController@doCheckout"
			));
		Route::get('assisted-purchase/getCheckout', array(
			"as"=>"getCheckout",
			"uses"=>"AssistPurchaseController@getCheckout"
			));
		Route::resource('assisted-purchase','AssistPurchaseController');
		Route::resource('forwarding','ForwardingController');
	});

});

/*
|--------------------------------------------------------------------------
| Administrator Area
|--------------------------------------------------------------------------
|
|	These are the routes that require Administrator to login first before
|	they can access to these pages.  
|
|
*/

# Administrator Routes
Route::group(['before' => 'auth|admin'], function()
{
	Route::group(array('prefix' => 'admin'), function()
	{
		Route::get('/', array(
			"as"=>"dashboard",function(){
				return View::make('backend.master');
			}));
	});
});




