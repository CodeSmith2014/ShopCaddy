<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

# guest
Route::filter('auth', function()
{
	if (!Sentry::check()) return Redirect::guest('login');
});

# member
Route::filter('standardMember', function()
{
	$user = Sentry::getUser();
    $membergroup = Sentry::findGroupByName('Members');
    if (!$user->inGroup($membergroup)) return Redirect::to('login');
});

# user
Route::filter('user', function()
{
	$user = Sentry::getUser();
    $usergroup = Sentry::findGroupByName('Users');
    if (!$user->inGroup($usergroup)) return Redirect::to('login');
});

Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

# guest
Route::filter('guest', function()
{
	if (Sentry::check())
	{
		$user = Sentry::getUser();
		$membergroup = Sentry::findGroupByName('Members');
	    $usergroup = Sentry::findGroupByName('Users');

	    if ($user->inGroup($membergroup)) return Redirect::intended('/');
	    elseif ($user->inGroup($usergroup)) return Redirect::intended('user');
	}
});

# user
Route::filter('redirectUser', function()
{
	if (Sentry::check())
	{
		$user = Sentry::getUser();
   		$usergroup = Sentry::findGroupByName('Users');

	    if ($user->inGroup($usergroup)) return Redirect::to('user');
	}
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function() {
    $token = Request::ajax() ? Request::header('X-CSRF-Token') : Input::get('_token');
    if (Session::token() != $token)
        throw new Illuminate\Session\TokenMismatchException;
});