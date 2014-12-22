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

Route::get('/', function(){return View::make('frontend.common.index');});
Route::get('about-us', function(){return View::make('frontend.common.about-us');});
Route::get('contact', function(){return View::make('frontend.common.contact');});

Route::get('login', function(){return View::make('frontend.guest.register-login');});



Route::get('faq', function()
{
	return View::make('frontend.master');
});
Route::get('services-charges', function()
{
	return View::make('frontend.master');
});
Route::get('shipping-calculator', function()
{
	return View::make('frontend.master');
});
Route::get('prohibited-items', function()
{
	return View::make('frontend.master');
});
Route::get('terms-conditions', function()
{
	return View::make('frontend.master');
});
Route::get('privacy-policy', function()
{
	return View::make('frontend.master');
});

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

Route::get('credits', function()
{
	return View::make('frontend.member.credits');
});

Route::get('services/assisted-purchase', array(
	"as"=>"assisted-purchase",function(){
		return View::make('frontend.member.assisted-purchase');
	}));

Route::get('services/forwarding', array(
	"as"=>"forwarding",function(){
		return View::make('frontend.member.credits');
	}));