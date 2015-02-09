<?php

class IbankController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$messages = array(
			'amount.required' => 'Transferred amount is required.',
			'amount.regex' => 'Invalid amount',
			'date.required' => 'Date of transfer is required.',
			'date_format' =>'Invalid date',
			'before' => 'Make the fund transfer before you submit the form',
			'time.regex' => 'Invalid time'
			);
		$tomorrow = date('Y-m-d',strtotime("tomorrow + 1 day"));
		$rules = array(
			'amount' => 'required|regex:/^\d{0,6}(\.\d{1,2})?$/',
			'date' => array('required','date_format:Y-m-d','before:'.$tomorrow),
			'time' => array('required','regex:/^([01]?[0-9]|2[0-3]):[0-5][0-9]/')
			);
		$validator = Validator::make(Input::all(), $rules, $messages);
		if($validator->fails()){
			return Redirect::route('credits')
			->withErrors($validator);
		}else{
			$credit = new Credit;
			$credit->method = 1;
			$credit->amount = Input::get('amount');
			$credit->member_id = Sentry::getUser()->id;
			$credit->topup_datetime = Input::get('date').' '.Input::get('time');
			$credit->touch();
			$credit->save();
			$message="Verificaiton Request Sent";
			return Redirect::route('credits')
			->with('message',$message);
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
