<?php

class RecoveryController extends BaseController {

	public function getForgot()
	{
		$messages = Session::get('message');
		return View::make('frontend.guest.forgot-password')->with('message', $messages);
	}

	public function postForgot()
	{
		try
		{
		    // Find the user using the user email address
		    $user = Sentry::findUserByLogin(Input::get('email'));

		    // Get the password reset code
		    $resetCode = $user->getResetPasswordCode();

		    // Now you can send this code to your user via email for example.
		    // email link should be shopcaddy/reset-password/{token}
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    return Redirect::route('forgot.create')->withErrors(['email'=>'Email was not found']);
		}

		return Redirect::route('forgot.create')->with('message','An email has been sent to '.(Input::get('email').'.'));
	}

	public function getReset($token)
	{
		if (is_null($token)) App::abort(404);
		return View::make('frontend.guest.reset-password')->with('token', $token);
	}

	public function postReset($token)
	{
		$rules = array(
			'new_password' => 'required|min:8|confirmed',
			);

		//validate form input with validation rules
		$validator = Validator::make(Input::all(),$rules);

		// if validator failed
		if($validator->fails()){

			// redirect back to form with errors from validator
			return Redirect::back()->withErrors($validator)->withInput();
		}
		else {
			try
			{
			    // Find the user using the token
			    $user = Sentry::findUserByResetPasswordCode($token);

			    // Check if the reset password code is valid
			    if ($user->checkResetPasswordCode($token))
			    {
			        // Attempt to reset the user password
			        if ($user->attemptResetPassword($token, Input::get('new_password')))
			        {
			            // Password reset passed
			            return Redirect::to('login')->with('message','Password Successfully Reset!');
			        }
			        else
			        {
			            // Password reset failed
			            return Redirect::back()->withErrors(['passcode'=>'Something went wrong, request for another password recovery email <a href="/forgot-password">here</a>.']);
			        }
			    }
			    else
			    {
			        // The provided password reset code is Invalid
			        return Redirect::back()->withErrors(['passcode'=>'Something went wrong, request for another password recovery email <a href="/forgot-password">here</a>.']);
			    }
			}
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
			{
			    return Redirect::back()->withErrors(['passcode'=>'Something went wrong, request for another password recovery email <a href="/forgot-password">here</a>.']);
			}
		}
	}
}