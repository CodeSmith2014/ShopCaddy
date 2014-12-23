<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getHome()
	{
		return View::make('frontend.common.index');
	}

	public function getAboutUs()
	{
		return View::make('frontend.common.about-us');
	}

	public function getContact()
	{
		return View::make('frontend.common.contact');
	}

	public function getFaq()
	{
		return View::make('frontend.master');
	}

	public function getServicesCharges()
	{
		return View::make('frontend.master');
	}

	public function getShippingCalculator()
	{
		return View::make('frontend.master');
	}

	public function getProhibitedItems()
	{
		return View::make('frontend.master');
	}

	public function getTermsConditions()
	{
		return View::make('frontend.master');
	}

	public function getPrivacyPolicy()
	{
		return View::make('frontend.master');
	}

}
