<?php

class AssistPurchaseController extends \BaseController {

	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/
	public function index()
	{
		$items = Item::where('order_id',null)->where('member_id',Sentry::getUser()->id)->get();
		if($items != null){
			return View::make('frontend.member.assisted-purchase',compact('items'));
		}
		return View::make('frontend.member.assisted-purchase');
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
		$rules = array(
			'name' => 'required',
			'url' => 'required',
			'qty' => 'required|integer|min:1',
			'price' => 'required|regex:/^\d{0,6}(\.\d{1,2})?$/'
			);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return "ERROR";
		}else{
			$item = new Item;
			$item->name = Input::get('name');
			$item->url = Input::get('url');
			$item->specification = Input::get('spec');
			$item->qty = Input::get('qty');
			$item->price = Input::get('price');
			$item->total = Input::get('price') * Input::get('qty');
			$item->member_id = Sentry::getUser()->id;
			$item->touch();
			$item->save();
			$formatHtml = 
			'<tr data-id="'.$item->id.'">'.
			'<td class="td-sw t-center">1</td>'.
			'<td><a href="'.urldecode(Input::get('url')).'" target="_blank">'.urldecode(Input::get('name')).'</a> '.urldecode(Input::get('spec')).'</td>'.
			'<td class="t-center">CNY '.urldecode(Input::get('price')).'</td>'.
			'<td class="t-center">QTY: '.urldecode(Input::get('qty')).'</td>'.
			'<td class="t-center">CNY '.urldecode(Input::get('price') * Input::get('qty')).'</td>'.
			'<td class="td-sw t-center"><input name="itemId" value="'.$item->id.'" type="checkbox" data-toggle="tooltip" title="Checkout"></td>'.
			'<td class="td-sw t-center"><button type="button" class="modifyButton"><i class="fa fa-pencil" data-toggle="tooltip" title="Modify"></i></button></td>'.
			'<td class="td-sw t-center"><button type="button" class="removeButton"><i class="fa fa-trash" data-toggle="tooltip" title="Remove"></i></button></td>'.
			'</tr>';

			return "SUCCESS:::::".$formatHtml;
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
		$i = Item::where('id',$id)->where('member_id',Sentry::getUser()->id)->first();
		if(count($i)==1){
			return Response::json($i);
		}
		return null;
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  int  $id
	* @return Response
	*/
	public function update($id)
	{		
		$rules = array(
			'name' => 'required',
			'url' => 'required',
			'qty' => 'required|integer|min:1',
			'price' => 'required|regex:/^\d{0,6}(\.\d{1,2})?$/'
			);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return "ERROR";
		}else{
			$i = Item::where('id',$id)->where('member_id',Sentry::getUser()->id)->first();
			if(count($i)==1){
				$i->name = Input::get('name');
				$i->url = Input::get('url');
				$i->qty = Input::get('qty');
				$i->price = Input::get('price');
				$i->total = Input::get('price') * Input::get('qty');
				$i->save();
				$i->touch();
			}else{
				return "ERROR";
			}
		}
		return "SUCCESS";
	}


	/**
	* Remove the specified resource from storage.
	*
	* @param  int  $id
	* @return Response
	*/
	public function destroy($id)
	{
		$i = Item::where('id',$id)->where('member_id',Sentry::getUser()->id)->first();
		if(count($i)==1){
			$i->delete();
			return "SUCCESS";
		}else{
			return "ERROR";
		}

	}

	public function doCheckout(){
		$itemsId = explode(',', Input::get('checkoutItemsId'));
		$items = Item::whereIn('id',$itemsId)->where('member_id',Sentry::getUser()->id)->get();
		if(count($itemsId) == count($items)){
			$total = $items->sum('total');
			$order = new Order;
			$order->total_yuan = $total;
			$order->member_id = Sentry::getUSer()->id;
			$order->status_code = 1;
			$order->save();
			foreach($items as $i){
				$order->items()->save($i);
			}
			$order->touch();
			return "SUCCESS";

		}else{
			return "ERROR";
		}
	}

	public function getCheckout(){
		$orders = Order::where('member_id',Sentry::getUser()->id)->get();
		if(count($orders)>0){
			$formatHtml = 'SUCCESS:::::';
			foreach($orders as $o){
				$formatHtml .= 
				"<table class='table table-bordered'>".
				"<thead><tr>".
				"<td colspan='6' class='danger'>Order No: ".$o->id."</td>".
				"</tr></thead><tbody>";
				$count = 0;
				foreach($o->items as $i){
					$count += 1;
					$formatHtml.=
					"<tr data-id=".$count.">".
					"<td class='t-center'>".$count."</td>".
					"<td>".urldecode($i->name)." ".urldecode($i->specification)."</td>".
					"<td class='t-center'>CNY ".number_format($i->price,2)."</td>".
					"<td class='t-center'>QTY: ".$i->qty."</td>".
					"<td class='t-center'>CNY ".number_format($i->total,2)."</td>";
					if($count == 1){
						$formatHtml.="<td class='t-center' rowspan='".count($o->items)."' ><button class='btn btn-danger btn-lg' disabled='disabled'>Processing Orders..</button></td>";
					}
					
				}
				$formatHtml.=
				"</tbody></table>";
			}
			return $formatHtml;
		}else{
			return "ERROR";
		}
	}

}