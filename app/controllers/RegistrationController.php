<?php

class RegistrationController extends \BaseController {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// $rules = array(
		// 	'username' => 'required',
		// 	'email' => 'required|email|unique:users|confirmed',
		// 	);
		
		// //validate form input with validation rules
		// $validator = Validator::make(Input::all(),$rules);

		// // if validator failed
		// if($validator->fails()){

		// 	// redirect back to form with errors from validator
		// 	$messages = $validator->messages();
		// 	return Redirect::route('edit-email')->withErrors($validator)->withInput();
		// }
		// else{
		// 	$user->email = Input::get('email');

		// 	// save data
		// 	$user->touch();
		// 	$user->save();

		// 	// redirect back
		// 	return Redirect::route('account');
		// }
	}

}
