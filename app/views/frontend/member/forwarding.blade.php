@extends('frontend.master')

@section('title')
@parent
- Forwarding Services
@stop

@section('hgroup')
<section class="hgroup">
	<h1>Forwarding Service</h1>
	<h2>Be specific with the content description as it is use for customs declaration. Incorrect or wrong declaration will cause your order to be delayed or even confiscated by the authorities. </h2>
	<ul class="breadcrumb pull-right">
		<li><a href="/">Home</a> </li>
		<li>Forwarding Service</li>
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
							Pracel Tracking <span class="badge">5</span>
						</a>
					</li>
					<li>
						<a href="#orders" data-toggle="pill">
							Parcel Arrived At Shop Caddy Vacinity <span class="badge">0</span>
						</a>
					</li>
					<li>
						<a href="#history" data-toggle="pill">
							Past Orders
						</a>
					</li>
					<li class="pull-right">
						<a >
							Checkout (0)
						</a>
					</li>
					<li class="pull-right" data-target="#addOrderModal" data-toggle="modal" id="trackOrder">
						<a>
							Add Order
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="table-responsive tab-pane active" id="basket">
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td class="td-sw t-center">No.</td>
									<td class="t-center">Tracking No.</td>
									<td class="t-center">Tracking Company</td>
									<td class="t-center">Order Value</td>
								</tr>
								<tr>
									<td class="td-sw t-center">1</td>
									<td class="t-center">868856854394</td>
									<td class="t-center">申通快递</td>
									<td class="t-center">$101.01</td>
								</tr>
								<tr>
									<td class="td-sw t-center">2</td>
									<td class="t-center">868856854394</td>
									<td class="t-center">申通快递</td>
									<td class="t-center">$101.01</td>
								</tr>
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
									<td class="t-center" rowspan="3" style="vertical-align:middle;"><button class="btn btn-danger btn-lg" disabled="disabled">Processing Orders..</button></td>
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
						</table>

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
<div class="modal fade" id="addOrderModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title"><strong>Add Order Information</strong></h4>
				<p>Item description is needed for customs declaration. Incorrect declaration will, either delay or have your order be confiscated by the authorities.</p>
			</div>
			<div class="modal-body">
				<form action="" role="form" style="text-align:center">
					<fieldset>
						<section>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label for="kuaiDiNo" class="sr-only"></label>
										<input type="text" id="kuaiDiNo" class="form-control" placeholder="Tracking Number">
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="kuaiDiCo" class="sr-only"></label>
										<div class="input-group">
											<div class="input-group-addon"><span class="glyphicon glyphicon glyphicon-send" aria-hidden="true"></span></div>
											<input type="text" id="kuaiDiCo" class="form-control" placeholder="Kuai Di Company">
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="orderValue" class="sr-only"></label>
										<div class="input-group">
											<div class="input-group-addon">$</div>
											<input type="text" id="orderValue" class="form-control" placeholder="Value of this Order">
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="lineItems">
							<div class="row">
								<div class="col-xs-8">
									<div class="form-group">
										<textarea class="form-control" rows="3" placeholder="Order item description" name="description[]" id="description_1"></textarea>
									</div>
								</div>
								<div class="col-xs-3">
									<input type="text" name="qty[]" class="form-control" id="qty_1" placeholder="Quantity"/>
								</div>
								<div class="col-xs-1">
									<button class="btn btn-danger removeRow" type="button"><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span></button>
								</div>
							</div>
						</section>
						<section>
							<div class="form-group">
								<label for="orderRemarks" class="sr-only"></label>
								<textarea class="form-control" id="orderRemarks" name="orderRemarks" placeholder="Special Remarks?"></textarea>
							</div>
						</section>
					</fieldset>
				</form>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success pull-left addRow"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> More Order Items</button>
				<button class="btn btn-primary pull-left">I'm Done</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Add Item Modal -->
@stop

@section('customJavascript')
<script type="text/javascript">
$(document).ready(function(){
	var row=1;
	$(".addRow").click(function(){
		row+=1;
		$('.lineItems').append('<div class="row"><div class="col-xs-8"><div class="form-group"><textarea class="form-control" rows="3" placeholder="Order item description" name="description[]" id="description_'+row+'"></textarea></div></div><div class="col-xs-3"><input type="text" name="qty[]" class="form-control" id="qty_'+row+'" placeholder="Quantity"/></div><div class="col-xs-1"><button class="btn btn-danger removeRow" type="button"><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span></button></div></div>');
		console.log("Row Added. There are "+row+" row(s) in total");
	});

	$(".lineItems").on("click",".removeRow",function(e){
		if(row>1){
			row-=1;
			$(this).closest('.row').remove();
			console.log("Row Removed. Left with "+row+" row(s)");
		}else{
			console.log("Must have at least 1 row.");
		}
	});
});
</script>
@stop