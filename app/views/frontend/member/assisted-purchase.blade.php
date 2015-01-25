@extends('frontend.master')

@section('title')
@parent
- Assisted Purchase
@stop

@section('hgroup')
<section class="hgroup">
	<h1>Caddy In Action</h1>
	<h2>This is a subtitle used optionally for explaining more...</h2>
	<ul class="breadcrumb pull-right">
		<li><a href="index.html">Home</a> </li>
		<li class="active">Caddy In Action</li>
	</ul>
</section>
@stop

@section('content')
<br>
<section>
	<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-deletebutton="false" data-widget-colorbutton="false">
		<div style="padding:25px 25px 5px 25px;">

			<!-- widget edit box -->
			<div class="jarviswidget-editbox">
				<!-- This area used as dropdown edit box -->
			</div>
			<!-- end widget edit box -->

			<!-- widget content -->
			<div class="widget-body">
				<ul class="nav nav-pills caddy-action-tabs">
					<li class="active">
						<a href="#basket" data-toggle="pill">
							Caddy Basket <span class="badge" id="basketBadge">0</span>
						</a>
					</li>
					<li>
						<a href="#orders" class="orderTab">
							Orders
						</a>
					</li>
					<li>
						<a href="#history" data-toggle="pill">
							Past Orders
						</a>
					</li>
					<li class="pull-right checkoutBtn">
						<a>
							Checkout (0)
						</a>
					</li>
					<li class="pull-right" data-target="#addItemModal" data-toggle="modal" id="addItemToBasket">
						<a>
							Add Item
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="table-responsive tab-pane active" id="basket">
						<table class="table table-bordered">
							<tbody>
								@if($items != null)
								<?php $count = 1; ?>
								@foreach($items as $item)
								<tr data-id="{{urldecode($item->id)}}">
									<td class="td-sw t-center"><?php echo $count ?></td>
									<td><a href="{{urldecode($item->url)}}" target="_blank">{{urldecode($item->name)}}</a> {{urldecode($item->specification)}}</td>
									<td class="t-center">CNY {{urldecode(number_format($item->price,'2'))}}</td>
									<td class="t-center">QTY: {{urldecode($item->qty)}}</td>
									<td class="t-center">CNY {{urldecode(number_format($item->total,'2'))}}</td>
									<td class="td-sw t-center"><input name="itemId[]" type="checkbox" data-toggle="tooltip" title="Checkout" value="{{urldecode($item->id)}}"></td>
									<td class="td-sw t-center"><button type="button" class="modifyButton"><i class="fa fa-pencil" data-toggle="tooltip" title="Modify"></i></button></td>
									<td class="td-sw t-center"><button type="button" class="removeButton"><i class="fa fa-trash" data-toggle="tooltip" title="Remove"></i></button></td>
								</tr>
								<?php $count += 1; ?>
								@endforeach
								@endif
							</tbody>
						</table>
					</div>
					<div class="table-responsive tab-pane" id="orders">
						<table class="table table-bordered">
							<thead>
								<tr>
									<td colspan="6" class="danger">Order No: 12345679</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="td-sw t-center">1</td>
									<td>Sanrio出品 正版散货 小号 Hello kitty KT猫 凯蒂猫 公仔 摆件 (This is a demo)</td>
									<td class="t-center">CNY7.00</td>
									<td class="t-center">QTY: 7</td>
									<td class="t-center">CNY49.00</td>
									<td class="t-center" rowspan="3"><button class="btn btn-danger btn-lg" disabled="disabled">Processing Orders..</button></td>
								</tr>
							</tbody>
						</table>

						<!-- <table class="table table-bordered">
							<thead>
								<tr>
									<td colspan="6" class="danger">Order No: 12345679</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="td-sw t-center">1</td>
									<td>Sanrio出品 正版散货 小号 Hello kitty KT猫 凯蒂猫 公仔 摆件 (This is a demo)</td>
									<td class="t-center">CNY7.00</td>
									<td class="t-center">QTY: 7</td>
									<td class="t-center">CNY49.00</td>
									<td class="t-center" rowspan="3" style="vertical-align:middle;"><button class="btn btn-warning btn-lg" data-target="#paymentModal" data-toggle="modal" id="makePayment">Make Payment</button></td>
								</tr>
								<tr>
									<td class="td-sw t-center">2</td>
									<td>Sanrio出品 正版散货 小号 Hello kitty KT猫 凯蒂猫 公仔 摆件 (This is a demo)</td>
									<td class="t-center">CNY7.00</td>
									<td class="t-center">QTY: 7</td>
									<td class="t-center">CNY49.00</td>
								</tr>
								<tr>
									<td class="td-sw t-center">3</td>
									<td>Sanrio出品 正版散货 小号 Hello kitty KT猫 凯蒂猫 公仔 摆件 (This is a demo)</td>
									<td class="t-center">CNY7.00</td>
									<td class="t-center">QTY: 7</td>
									<td class="t-center">CNY49.00</td>
								</tr>
							</tbody>
						</table>

						<table class="table table-bordered">
							<thead>
								<tr>
									<td colspan="6" class="danger">Order No: 12345679</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="td-sw t-center">1</td>
									<td>Sanrio出品 正版散货 小号 Hello kitty KT猫 凯蒂猫 公仔 摆件 (This is a demo)</td>
									<td class="t-center">CNY7.00</td>
									<td class="t-center">QTY: 7</td>
									<td class="t-center">CNY49.00</td>
									<td class="t-center" rowspan="3" style="vertical-align:middle;"><button class="btn btn-danger btn-lg" disabled="disabled">Processing Payment..</button></td>
								</tr>
								<tr>
									<td class="td-sw t-center">2</td>
									<td>Sanrio出品 正版散货 小号 Hello kitty KT猫 凯蒂猫 公仔 摆件 (This is a demo)</td>
									<td class="t-center">CNY7.00</td>
									<td class="t-center">QTY: 7</td>
									<td class="t-center">CNY49.00</td>
								</tr>
								<tr>
									<td class="td-sw t-center">3</td>
									<td>Sanrio出品 正版散货 小号 Hello kitty KT猫 凯蒂猫 公仔 摆件 (This is a demo)</td>
									<td class="t-center">CNY7.00</td>
									<td class="t-center">QTY: 7</td>
									<td class="t-center">CNY49.00</td>
								</tr>
							</tbody>
						</table>

						<table class="table table-bordered">
							<thead>
								<tr>
									<td colspan="6" class="danger">Order No: 12345679</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="td-sw t-center">1</td>
									<td>Sanrio出品 正版散货 小号 Hello kitty KT猫 凯蒂猫 公仔 摆件 (This is a demo)</td>
									<td class="t-center">CNY7.00</td>
									<td class="t-center">QTY: 7</td>
									<td class="t-center">CNY49.00</td>
									<td class="t-center" rowspan="3" style="vertical-align:middle;"><button class="btn btn-warning btn-lg" data-target="#deliveryModal" data-toggle="modal" id="arrangeDelivery">Send For Delivery</button></td>
								</tr>
								<tr>
									<td class="td-sw t-center">2</td>
									<td>Sanrio出品 正版散货 小号 Hello kitty KT猫 凯蒂猫 公仔 摆件 (This is a demo)</td>
									<td class="t-center">CNY7.00</td>
									<td class="t-center">QTY: 7</td>
									<td class="t-center">CNY49.00</td>
								</tr>
								<tr>
									<td class="td-sw t-center">3</td>
									<td>Sanrio出品 正版散货 小号 Hello kitty KT猫 凯蒂猫 公仔 摆件 (This is a demo)</td>
									<td class="t-center">CNY7.00</td>
									<td class="t-center">QTY: 7</td>
									<td class="t-center">CNY49.00</td>
								</tr>
							</tbody>
						</table> -->
					</div>
					<div class="table-responsive tab-pane" id="history">
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td class="col-xs-1 t-center">1</td>
									<td class="col-xs-6">Demo</td>
									<td class="col-xs-1 t-center">CNY17.00</td>
									<td class="col-xs-1 t-center">QTY: 70</td>
									<td class="col-xs-1 t-center">CNY490.00</td>
									<td class="col-xs-1 t-center">Row 6</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop

@section('modals')
<!-- Payment Modal -->
<div class="modal fade" id="paymentModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title"><strong>Payment Summary</strong></h4>
			</div>
			<div class="modal-body">
				<p>Credit Balance: $100</p>
				<p>$[20.01] will be dedcuted for this payment.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary">Pay Now</button> <a href="credits.php" class="btn btn-warning" target="_blank">Top Up account</a> 
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Payment Modal -->

<!-- Delivery Modal -->
<div class="modal fade" id="deliveryModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title"><strong>Choose Delivery Method</strong></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">


					</div>
					<div class="col-sm-4">

					</div>
					<div class="col-sm-4">

					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary">Pay Now</button> <button class="btn btn-danger" data-dismiss="modal">Close</button> 
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Delivery Modal -->

<!-- Add Item Modal -->
<div class="modal fade" id="addItemModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title"><strong>Item Information</strong></h4>
				<p>
					All items add into the basket will remain for 30 days. <br>
				</p>
			</div>
			<div class="modal-body">
				<fieldset>
					<section>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label for="name" class="sr-only"></label>
									<input type="text" id="name" name="name" class="form-control " placeholder="Item Name">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label for="url" class="sr-only"></label>
									<div class="input-group">
										<div class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></div>
										<input type="text" id="url" name="url" class="form-control" placeholder="URL">
									</div>
								</div>
							</div>									
						</div>
					</section>
					<section>
						<div class="form-group">
							<label for="specification" class="sr-only"></label>
							<textarea id="specification" name="specification" class="form-control product-description" placeholder="Item Specifications"></textarea>
						</div>
					</section>
					<section>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label for="qty" class="sr-only"></label>
									<input type="text" id="qty" name="qty" class="form-control" placeholder="Quantity">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label for="price" class="sr-only"></label>
									<div class="input-group">
										<div class="input-group-addon"><span>¥</span></div>
										<input type="text" id="price" name="price" class="form-control" placeholder="Unit Price in Yuan">
									</div>
								</div>
							</div>
						</div>
					</section>
				</fieldset>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onClick="AddItem(false)">Save and Leave</button>
				<button type="button" class="btn btn-primary" onClick="AddItem(true)">Save and Add More Item</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Add Item Modal -->

<!-- Edit Item Modal -->
<div class="modal fade" id="editItemModal">
	<div class="modal-dialog">
		<div class="modal-content">
			{{Form::open(['method'=>'put','id'=>'editItemForm'])}}
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title"><strong>Item Information</strong></h4>
				<p>
					All items add into the basket will remain for 30 days. <br>
				</p>
			</div>
			<div class="modal-body">
				<fieldset>
					<section>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label for="mname" class="sr-only"></label>
									<input type="text" id="mname" name="name" class="form-control " placeholder="Item Name">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label for="murl" class="sr-only"></label>
									<div class="input-group">
										<div class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></div>
										<input type="text" id="murl" name="url" class="form-control" placeholder="URL">
									</div>
								</div>
							</div>									
						</div>
					</section>
					<section>
						<div class="form-group">
							<label for="mspecification" class="sr-only"></label>
							<textarea id="mspecification" name="specification" class="form-control product-description" placeholder="Item Specifications"></textarea>
						</div>
					</section>
					<section>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label for="mqty" class="sr-only"></label>
									<input type="text" id="mqty" name="qty" class="form-control" placeholder="Quantity">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label for="mprice" class="sr-only"></label>
									<div class="input-group">
										<div class="input-group-addon"><span>¥</span></div>
										<input type="text" id="mprice" name="price" class="form-control" placeholder="Unit Price in Yuan">
									</div>
								</div>
							</div>
						</div>
					</section>
				</fieldset>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
			{{Form::close()}}
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Edit Item Modal -->

<!-- Delivery Modal -->
<div class="modal fade" id="deleteModal">
	<div class="modal-dialog">
		<div class="modal-content">
			{{Form::open(["method"=>"DELETE",'id'=>'deleteForm'])}}
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title"><strong>Remove Item from Basket?</strong></h4>
			</div>
			<div class="modal-body">
				Are you sure you want to remove item from the basket?
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary">Yes</button> <button type="button" class="btn btn-danger" data-dismiss="modal">No</button> 
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Delivery Modal -->
@stop

@section('customJavascript')
<script type="text/javascript">

$().ready(function(){
	$('#basketBadge').text($('#basket input:checkbox').length);
	$('#basket').on('click','input:checkbox',function(){
		$('li.checkoutBtn a').text('Checkout ('+$("#basket input:checkbox:checked").length+')');
	});
});

$('ul.caddy-action-tabs').on('click','.checkoutBtn a',function(){
	var checkoutItemsId = $('input[name="itemId[]"]:checked').map(function(){
		return this.value;
	}).get().join();
	var url = "/services/assisted-purchase/checkout"
	$.ajax({
		cache: false,
		data:{
			checkoutItemsId:checkoutItemsId
		},
		timeout:5000,
		type:"POST",
		url:url,
		success:function(data){
			top.location.href=self.location.href;
		},
		error:function(xhr,ajaxOptions,thrownError){
			console.log(xhr.responseText);
			return false;
		}
	});
});

$('ul.caddy-action-tabs').on('click','.orderTab',function(e){
	e.preventDefault();
	$.ajax({
		cache: false,
		timeout: 5000,
		type:"GET",
		url:"{{URL::route('getCheckout')}}",
		success:function(data){
			Cart_Refresh(data);
			$(".orderTab").tab('show');
			return false;
		},
		error: function(xhr,ajaxOptions,thrownError){
			console.log(xhr.responseText);
			return false;
		}
	});
});

$('#basket').on('click','button.modifyButton',function(){
	$('#editItemForm')[0].reset();
	var id = $(this).closest('tr').data('id');
	var request = $.ajax({
		cache: false,
		data:{},
		timeout: 5000,
		type: "GET",
		url:"/services/assisted-purchase/"+id+"/edit",
		success: function(data){
			if(data){
				$('#editItemForm').attr('data-id',decodeURIComponent(data.id));
				$('#mname').val(decodeURIComponent(data.name));
				$('#murl').val(decodeURIComponent(data.url));
				$('#mspecification').val(decodeURIComponent(data.specification));
				$('#mprice').val(decodeURIComponent(parseFloat(data.price).toFixed(2)));
				$('#mqty').val(decodeURIComponent(data.qty));
				$('#editItemModal').modal('show');
			}else{
				$('#addItemModal').modal('show');
			}
			return false;
		},
		error: function(xhr,ajaxOptions,thrownError){
			console.log(xhr.responseText);
			return false;
		}
	});
});

$('#basket').on('click','button.removeButton',function(){
	var id = $(this).closest('tr').data('id');
	$('#deleteForm').attr('data-id',id);
	$('#deleteModal').modal('show');
});

$('#editItemForm').submit(function(e){
	if($('#mname').val()==""){
		$('#mname').parent('div').addClass('has-error');
		return false;
	}
	$('#mname').parent('div').removeClass('has-error');

	if($('#murl').val()==""){
		$('#murl').parent('div').addClass('has-error');
		return false;
	}
	$('#murl').parent('div').removeClass('has-error');

	var specification;
	if($('#mspecification').val()==""){
		specification = encodeURIComponent("-");
	}else{
		specification = encodeURIComponent($('#mspecification').val());
	}

	if($('#mqty').val()=="" || $('#mqty').val() < 1){
		$('#mqty').parent('div').addClass('has-error');
		return false;
	}
	if($('#mqty').val().match(/^\d+$/) == null){
		$('#mqty').parent('div').addClass('has-error');
		return false;
	}
	$('#mqty').parent('div').removeClass('has-error');

	if($('#mprice').val()==""){
		$('#mprice').parent('div').addClass('has-error');
		return false;
	}
	if($('#mprice').val().match(/^\d{0,6}(\.\d{1,4})?$/) == null){
		$('#mprice').parent('div').addClass('has-error');
		return false;
	} 
	$('#mprice').parent('div').removeClass('has-error');
	e.preventDefault();
	var form = $(this);
	var id = $(this).data('id');
	var method = form.find('input[name="_method"]').val();
	var url = "/services/assisted-purchase/"+id;
	$.ajax({
		url:url,
		data:form.serialize(),
		method: method,
		success:function(data){
			top.location.href=self.location.href;
		},
		error: function(xhr,ajaxOptions,thrownError){
			console.log(xhr.responseText);
			return false;
		}
	});

});

$('#deleteForm').submit(function(e){
	e.preventDefault();
	var form = $(this);
	var id = form.data('id');
	var url = "/services/assisted-purchase/"+id;
	var method = form.find('input[name="_method"]').val();
	$.ajax({
		url:url,
		method:method,
		success:function(data){
			top.location.href=self.location.href;
		},
		error: function(xhr,ajaxOptions,thrownError){
			console.log(xhr.responseText);
			return false;
		}
	});
});

function AddItem(bool){
	if($('#name').val()==""){
		$('#name').parent('div').addClass('has-error');
		return false;
	}
	$('#name').parent('div').removeClass('has-error');

	if($('#url').val()==""){
		$('#url').parent('div').addClass('has-error');
		return false;
	}
	$('#url').parent('div').removeClass('has-error');

	var specification;
	if($('#specification').val()==""){
		specification = encodeURIComponent("-");
	}else{
		specification = encodeURIComponent($('#specification').val());
	}

	if($('#qty').val()==""){
		$('#qty').parent('div').addClass('has-error');
		return false;
	}
	if($('#qty').val().match(/^\d+$/) == null){
		$('#qty').parent('div').addClass('has-error');
		return false;
	}
	$('#qty').parent('div').removeClass('has-error');

	if($('#price').val()==""){
		$('#price').parent('div').addClass('has-error');
		return false;
	}
	if($('#price').val().match(/^\d{0,6}(\.\d{1,4})?$/) == null){
		$('#price').parent('div').addClass('has-error');
		return false;
	} 
	$('#price').parent('div').removeClass('has-error');

	DisableAddItemToolFormButton(true);

	var request = $.ajax({
		cache: false,
		data:{
			name: encodeURIComponent($('#name').val()),
			url: encodeURIComponent($('#url').val()),
			qty: encodeURIComponent($('#qty').val()),
			price: encodeURIComponent($('#price').val()),
			spec: specification
		},
		timeout: 5000,
		type: "POST",
		url:"{{URL::route('services.assisted-purchase.store')}}",
		success: function(data){
			Basket_Refresh(data);
			if(bool==false){
				$('#addItemModal').modal('hide');
			}
			return false;
		},
		error: function(xhr,ajaxOptions,thrownError){
			console.log(xhr.responseText);
			return false;
		}
	});
}

function Basket_Refresh(str){	
	if(str.substring(0, 7) == "SUCCESS"){
		$('#basket tbody').append(str.split(":::::")[1]);
		$('#basketBadge').text($('#basket input:checkbox').length);
		$('#name').val("");
		$('#url').val("");
		$('#specification').val("");
		$('#qty').val("");
		$('#price').val("");
		DisableAddItemToolFormButton(false);
		return false;

	}else{
		top.location.href = "{{URL::route('services.assisted-purchase.index')}}";
		return false;
	}
}

function Cart_Refresh(str){
	// $("#orders").empty();
	if(str.substring(0, 7) == "SUCCESS"){
		$('#orders').append(str.split(":::::")[1]);
	}
	return false;
}
</script>
@stop