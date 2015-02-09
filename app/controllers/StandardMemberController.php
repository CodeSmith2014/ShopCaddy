<?php

class StandardMemberController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function getMemberProtected()
	{
		return View::make('frontend.common.index');
	}

	public function getCredits()
	{
		$message = Session::get('message');
		$balance = $this->getBalance();
		$total = $this->getPending();
		$transactions = $this->getTransaction();
		return View::make('frontend.member.credits',compact('total','balance','transactions','message'));
	}

	public function getTransaction(){
		$transaction = Credit::where('member_id',Sentry::getUser()->id)->get();
		return $transaction;
	}

	public function getBalance(){
		return number_format(Sentry::getUser()->balance,2);
	}

	public function getPending(){
		$total = 0;
		$pending_credits = Credit::where('member_id',Sentry::getUser()->id)->where('verify_datetime',null)->get();
		foreach($pending_credits as $pending){
			$total += $pending->amount;
		}
		return $total = number_format($total,2);;
	}
}