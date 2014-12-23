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

	public function getAssistedPurchase()
	{
		return View::make('frontend.member.assisted-purchase');
	}

	public function getForwarding()
	{
		return View::make('frontend.member.credits');
	}

}