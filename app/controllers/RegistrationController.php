<?php

class RegistrationController extends \BaseController {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'username' => 'required',
			'email' => 'required|email|unique:users|confirmed',
			'password' => 'required|min:8',
			'checkbox' => 'accepted',
			);
		
		//validate form input with validation rules
		$validator = Validator::make(Input::all(),$rules);

		// if validator failed
		if($validator->fails()){

			// redirect back to form with errors from validator
			return Redirect::route('login')->withErrors($validator)->withInput();
		}
		else{
			$user = Sentry::createUser(array(
				'username' => Input::get('username'),
				'email' => Input::get('email'),
				'password' => Input::get('password'),
				'activated' => true,
				));

			$membergroup = Sentry::findGroupByName('Members');
			$user->addGroup($membergroup);

			// redirect back
			return Redirect::to('login')->with('message','Account Successfully Created!');
		}
	}

}
