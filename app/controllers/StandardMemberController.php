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

	public function getAccount()
	{
		$user = Sentry::getUser();
		$messages = Session::get('message');
		return View::make('frontend.member.account.account')->with('user',$user)->with('message', $messages);
	}

	public function editName()
	{
	    $user = Sentry::getUser();
	    return View::make('frontend.member.account.edit-name')->with('user',$user);
	}

	public function updateName()
	{
		$user = Sentry::getUser();
		$rules = array(
			'name'=>'required',
			);
		
		//validate form input with validation rules
		$validator = Validator::make(Input::all(),$rules);

		// if validator failed
		if($validator->fails()){

			// redirect back to form with errors from validator
			return Redirect::route('edit-name')->withErrors($validator)->withInput();
		}
		else{
			$user->name = Input::get('name');

			// save data
			$user->touch();
			$user->save();

			// redirect back
			return Redirect::route('account')->with('message','Name Successfully Changed!');
		}
	}

	public function editEmail()
	{
	    $user = Sentry::getUser();
	    return View::make('frontend.member.account.edit-email')->with('user',$user);
	}

	public function updateEmail()
	{
		$user = Sentry::getUser();
		$rules = array(
			'new_email' => 'required|email|unique:users|confirmed',
			);
		
		//validate form input with validation rules
		$validator = Validator::make(Input::all(),$rules);

		// if validator failed
		if($validator->fails()){

			// redirect back to form with errors from validator
			return Redirect::route('edit-email')->withErrors($validator)->withInput();
		}
		else{
			$user->email = Input::get('new_email');

			// save data
			$user->touch();
			$user->save();

			// redirect back
			return Redirect::route('account')->with('message','Email Address Successfully Changed!');
		}
	}

	public function editMobile()
	{
	    $user = Sentry::getUser();
	    return View::make('frontend.member.account.edit-mobile')->with('user',$user);
	}

	public function updateMobile()
	{
		$user = Sentry::getUser();
		$rules = array(
			'new_mobile_phone_number'=>'required',
			);
		
		//validate form input with validation rules
		$validator = Validator::make(Input::all(),$rules);

		// if validator failed
		if($validator->fails()){

			// redirect back to form with errors from validator
			return Redirect::route('edit-mobile')->withErrors($validator)->withInput();
		}
		else{
			$user->mobile_no = Input::get('new_mobile_phone_number');

			// save data
			$user->touch();
			$user->save();

			// redirect back
			return Redirect::route('account')->with('message','Mobile Phone Number Successfully Changed!');
		}
	}

	public function editPassword()
	{
	    $user = Sentry::getUser();
	    return View::make('frontend.member.account.edit-password')->with('user',$user);
	}

	public function updatePassword()
	{
		$user = Sentry::getUser();
		$rules = array(
			'current_password'=>'required|hashmatch',
			'new_password'=>'required|min:8|confirmed|different:current_password',
			);

		//validate form input with validation rules
		Validator::extend('hashmatch', function($attribute, $value, $parameters){
			$user = Sentry::getUser();
			return Hash::check(Input::get('current_password'), $user->password);
		});

		Validator::replacer('hashmatch', function($message, $attribute, $rule, $parameters)
		{
		    return 'The current password must match the account password.';
		});

		$validator = Validator::make(Input::all(),$rules);

		// if validator failed
		if($validator->fails()){

			// redirect back to form with errors from validator
			return Redirect::route('edit-password')->withErrors($validator)->withInput();
		}
		else{
			$user->password = Input::get('new_password');

			// save data
			$user->touch();
			$user->save();

			// redirect back
			return Redirect::route('account')->with('message','Password Successfully Changed!');
		}
	}

}