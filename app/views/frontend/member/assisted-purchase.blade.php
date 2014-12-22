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
							Caddy Basket <span class="badge">0</span>
						</a>
					</li>
					<li>
						<a href="#orders" data-toggle="pill">
							Orders <span class="badge">0</span>
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
					<li class="pull-right" data-target="#addItemModal" data-toggle="modal" id="addItemToBasket">
						<a>
							Add Item (0)
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="table-responsive tab-pane active" id="basket">
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td class="td-sw t-center">1</td>
									<td>Sanrio出品 正版散货 小号 Hello kitty KT猫 凯蒂猫 公仔 摆件 (This is a demo)</td>
									<td class="t-center">CNY7.00</td>
									<td class="t-center">QTY: 7</td>
									<td class="t-center">CNY49.00</td>
									<td class="td-sw t-center"><input type="checkbox" data-toggle="tooltip" title="Checkout"></td>
									<td class="td-sw t-center"><i class="fa fa-pencil" data-toggle="tooltip" title="Modify"></i></td>
									<td class="td-sw t-center"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></td>
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
<div class="modal fade" id="addItemModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title"><strong>Item Information</strong></h4>
				<p>All items add into the basket will remain for 30 days.</p>
			</div>
			<div class="modal-body">
				<form action="" role="form" style="text-align:center">
					<fieldset>
						<section>
							<div class="form-group">
								<div class="form-inline">
									<input type="text" class="form-control" placeholder="Product Name">
									<input type="text" class="form-control" placeholder="URL">
								</div>
							</div>
						</section>
						<section>
							<div class="form-group">
								<div class="form-inline">
									<textarea class="form-control product-description" placeholder="Product Specifications"></textarea>
								</div>
							</div>
						</section>
						<section>
							<div class="form-group">
								<div class="form-inline">
									<input type="text" class="form-control" placeholder="Quantity">
									<input type="text" class="form-control" placeholder="Unit Price">
								</div>
							</div>
						</section>
					</fieldset>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Save and Leave</button>
				<button type="button" class="btn btn-primary">Save and Add More Item</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Add Item Modal -->

@stop