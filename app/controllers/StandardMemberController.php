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
		return View::make('frontend.member.credits');
	}

	public function getAccount()
	{
		$user = Sentry::getUser();
		return View::make('frontend.member.account.account')->with('user',$user);
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
			return Redirect::route('account');
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
			'email' => 'required|email|unique:users|confirmed',
			);
		
		//validate form input with validation rules
		$validator = Validator::make(Input::all(),$rules);

		// if validator failed
		if($validator->fails()){

			// redirect back to form with errors from validator
			return Redirect::route('edit-email')->withErrors($validator)->withInput();
		}
		else{
			$user->email = Input::get('email');

			// save data
			$user->touch();
			$user->save();

			// redirect back
			return Redirect::route('account');
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
			'mobile_no'=>'required',
			);
		
		//validate form input with validation rules
		$validator = Validator::make(Input::all(),$rules);

		// if validator failed
		if($validator->fails()){

			// redirect back to form with errors from validator
			return Redirect::route('edit-mobile')->withErrors($validator)->withInput();
		}
		else{
			$user->mobile_no = Input::get('mobile_no');

			// save data
			$user->touch();
			$user->save();

			// redirect back
			return Redirect::route('account');
		}
	}

}