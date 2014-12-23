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

# CSRF Protection
Route::when('*', 'csrf', ['POST', 'PUT', 'PATCH', 'DELETE']);

# Static Pages. Redirect user so user cannot access these pages
Route::group(['before' => 'redirectUser'], function()
{
	Route::get('/', ['as' => 'home', 'uses' => 'HomeController@getHome']);
	Route::get('about-us', ['as' => 'about-us', 'uses' => 'HomeController@getAbout']);
	Route::get('contact', ['as' => 'contact', 'uses' => 'HomeController@getContact']);
});

# Registration



# Authentication
Route::get('login', ['as' => 'login', 'uses' => 'SessionController@create'])->before('guest');
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionController@destroy']);
Route::resource('sessions', 'SessionController', ['only' => ['create','store','destroy']]);

# Forgotten Password



// Route::get('faq', function()
// {
// 	return View::make('frontend.master');
// });
// Route::get('services-charges', function()
// {
// 	return View::make('frontend.master');
// });
// Route::get('shipping-calculator', function()
// {
// 	return View::make('frontend.master');
// });
// Route::get('prohibited-items', function()
// {
// 	return View::make('frontend.master');
// });
// Route::get('terms-conditions', function()
// {
// 	return View::make('frontend.master');
// });
// Route::get('privacy-policy', function()
// {
// 	return View::make('frontend.master');
// });

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
	Route::get('credits', ['as' => 'credits', 'uses' => 'StandardMemberController@getCredits']);
	Route::get('services/assisted-purchase', ['as' => 'assisted-purchase', 'uses' => 'StandardMemberController@getAssistedPurchase']);
	Route::get('services/forwarding', ['as' => 'forwarding', 'uses' => 'StandardMemberController@getForwarding']);

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
		
});





