<?php

class RegistrationController extends \BaseController {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postRegister()
	{
		$rules = array(
			'username' => 'required|unique:users',
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
				));

			$membergroup = Sentry::findGroupByName('Members');
			$user->addGroup($membergroup);

			// get activation code
			$activationCode = $user->getActivationCode();

			// send activation code to user so that he can activate account
			// link should be shopcaddy.com/verify-activate/{token}
			// http://shopcaddy.localhost/verify-activate/wk2dJHluf7GzO1uG0P04gSfTm9NdqE5DBc3vNBGHOe

			// redirect back
			return Redirect::to('login')->with('message','Account Successfully Created!');
		}
	}

	public function getRequest()
	{
		$messages = Session::get('message');
		return View::make('frontend.guest.request-activate')->with('message', $messages);
	}

	public function postRequest()
	{
		try
		{
		    // Find the user
		    $user = Sentry::findUserByLogin(Input::get('email'));

		    // Check if the user is activated or not
		    if ($user->isActivated())
		    {
		        // User is Activated
		        return Redirect::route('request.create')->withErrors(['active'=>'Your account is already activated. Click <a href="/login">here</a> to go to the login page.']);
		    }
		    else
		    {
		        // User is Not Activated
				$activationCode = $user->getActivationCode();
				// send activation code to user so that he can activate account
				// link should be shopcaddy.com/verify-activate/{token}
				// http://shopcaddy.localhost/verify-activate/wk2dJHluf7GzO1uG0P04gSfTm9NdqE5DBc3vNBGHOe

				// redirect back
				return Redirect::route('request.create')->with('message','Account Activation Email Successfully Sent!');
		    }
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    return Redirect::route('request.create')->withErrors(['email'=>'Email was not found']);
		}
	}

	public function getVerify($token)
	{
		if (is_null($token)) App::abort(404);
		return View::make('frontend.guest.verify-activate')->with('token', $token);
	}

	public function postVerify($token)
	{
		try
		{
		    // Find the user using the token
		    $user = Sentry::findUserByActivationCode($token);

		    // Attempt to activate the user
		    if ($user->attemptActivation($token))
		    {
		        // User activation passed
		        return Redirect::to('login')->with('message','Account Successfully Activated!');
		    }
		    else
		    {
		        // User activation failed
		        return Redirect::back()->withErrors(['activate'=>'Something went wrong, request for another account activation email <a href="/request-activate">here</a>.']);
		    }
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    return Redirect::back()->withErrors(['activate'=>'Something went wrong, request for another account activation email <a href="/request-activate">here</a>.']);
		}
		catch (Cartalyst\Sentry\Users\UserAlreadyActivatedException $e)
		{
		    return Redirect::back()->withErrors(['activate'=>'Your account is already activated. Click <a href="/login">here</a> to go to the login page.']);
		}
	}
}
