@extends('frontend.master')

@section('title')
@parent
- Credits Top-Up
@stop

@section('before_hgroup')

@stop

@section('hgroup')
<section class="hgroup">
	<h3 class="pull-right">
		Current balance: <strong>${{$balance}}</strong><br>
		Pending balance: <strong>${{$total}}</strong>
	</h3>
	<h1>Prepaid Credits</h1>
	<h2>Choose your top up method.</h2>
	<ul class="breadcrumb pull-right">
		<li><a href="index.html">Home</a> </li>
		<li>Prepaid Credits</li>
	</ul>
</section>
@stop

@section('content')
<section>
	<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-deletebutton="false" data-widget-colorbutton="false">
		<div>
			<!-- widget edit box -->
			<div class="jarviswidget-editbox">
				<!-- This area used as dropdown edit box -->
			</div>
			<!-- end widget edit box -->

			<!-- widget content -->
			<div class="widget-body">
				<ul class="nav nav-pills caddy-action-tabs">
					<li class="active">
						<a href="#internet-banking" data-toggle="pill">
							<i class="fa fa-desktop"></i>&nbsp;Internet Banking
						</a>
					</li>
					<li>
						<a href="#Paypal" data-toggle="pill">
							<i class="fa fa-paypal"></i>&nbsp;Paypal
						</a>
					</li>
					<li>
						<a href="#top-up-history" data-toggle="pill">
							<i class="fa fa-list"></i>&nbsp;Top Up History
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="internet-banking">
						<div class="row">
							<div class="col-sm-12 col-md-4">
								<div class="pricing_plan">
									<h3><strong>Step 1</strong> <small>iBank to Shop Caddy</small></h3>
									<div class="the_price">
										<img src="/assets/img/credits1.jpg" alt="" class="img-circle" />
									</div>
									<div class="the_offerings">
										<p>
											Secure Interbank fund transfer with FAST*<br/>
											Learn more about FAST <a href="http://www.abs.org.sg/pdfs/Newsroom/PressReleases/2014/FAST_FAQ_For_Web_20140319.pdf" target="_blank">here</a>
										</p>
										<p style="color:#000; margin-top:28px;">
											Bank: DBS BANK LTD <br>
											Account No.: 054-903524-6 <br>
											Bank Account Name: Procyon SG Pte Ltd <br>
										</p>
										<p style="color:#000; margin-top:28px;">
											Pls use <strong>ABCD1234</strong> for iBanking "My Initials".
										</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-4">
								{{Form::open(['url'=>URL::route('credits.ibank.store'),'method'=>'POST'])}}
								<div class="pricing_plan">
									<h3><strong>Step 2</strong> <small>Verification Form</small></h3>
									<div class="the_price">
										<img src="/assets/img/credits1.jpg" alt="" class="imgf-circle" />
									</div>
									<div class="the_offerings">
										<p>Fill in the form in order to verify your top up.</p>
										<div class="form-group">
											<div class="input-group">
												<div class="input-group-addon">$</div>
												<input type="text" class="form-control" name="amount" placeholder="Transferred Amount" />
											</div>
										</div>
										<div class="row">
											<div class="col-xs-7">
												<div class="form-group">
													<input type="text" id="datePicker" class="form-control" name="date" placeholder="Date of Transfer" />
												</div>
											</div>
											<div class="col-xs-5">
												<select class="form-control" name="time">
													<option value="00:00">00:00</option>
													<option value="00:30">00:30</option>
													<option value="01:00">01:00</option>
													<option value="01:30">01:30</option>
													<option value="02:00">02:00</option>
													<option value="02:30">02:30</option>
													<option value="03:00">03:00</option>
													<option value="03:30">03:30</option>
													<option value="04:00">04:00</option>
													<option value="04:30">04:30</option>
													<option value="05:00">05:00</option>
													<option value="05:30">05:30</option>
													<option value="06:00">06:00</option>
													<option value="06:30">06:30</option>
													<option value="07:00">07:00</option>
													<option value="07:30">07:30</option>
													<option value="08:00">08:00</option>
													<option value="08:30">08:30</option>
													<option value="09:00">09:00</option>
													<option value="09:30">09:30</option>
													<option value="10:00">10:00</option>
													<option value="10:30">10:30</option>
													<option value="11:00">11:00</option>
													<option value="11:30">11:30</option>
													<option value="12:00">12:00</option>
													<option value="12:30">12:30</option>
													<option value="13:00">13:00</option>
													<option value="13:30">13:30</option>
													<option value="14:00">14:00</option>
													<option value="14:30">14:30</option>
													<option value="15:00">15:00</option>
													<option value="15:30">15:30</option>
													<option value="16:00">16:00</option>
													<option value="16:30">16:30</option>
													<option value="17:00">17:00</option>
													<option value="17:30">17:30</option>
													<option value="18:00">18:00</option>
													<option value="18:30">18:30</option>
													<option value="19:00">19:00</option>
													<option value="19:30">19:30</option>
													<option value="20:00">20:00</option>
													<option value="20:30">20:30</option>
													<option value="21:00">21:00</option>
													<option value="21:30">21:30</option>
													<option value="22:00">22:00</option>
													<option value="22:30">22:30</option>
													<option value="23:00">23:00</option>
													<option value="23:30">23:30</option>
												</select>
											</div>
										</div>
									</div>
									<button class="btn btn-primary btn-lg">Submit</button> 
								</div>
								{{Form::close()}}
							</div>
							<div class="col-sm-12 col-md-4">
								<div class="pricing_plan">
									<h3><strong>Step 3</strong> <small>Verification by ShopCaddy Team</small></h3>
									<div class="the_price">
										<img src="/assets/img/credits1.jpg" alt="" class="img-circle" />
									</div>
									<div class="the_offerings">
										<p>
											Verification may take up to 2 working days. <br>
											Verification result will be informed via email.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="table-responsive tab-pane" id="Paypal">
						<div class="well">
							<strong>Credit top up with Paypal comes with 3.9% + $0.50 transaction charges.</strong>
						</div>
						<section class="paypal-topup">
							{{Form::open(['url'=>URL::route('paypal_topup'),'method'=>'POST'])}}
							<div class="form-group">
								Choose the amount you wish to top up:
								<label class="radio-inline">
									<input type="radio" name="paypal-amount" value="25">$25
								</label>
								<label class="radio-inline">
									<input type="radio" name="paypal-amount" value="50">$50
								</label>
								<label class="radio-inline">
									<input type="radio" name="paypal-amount" value="100">$100
								</label>
								<label class="radio-inline">
									<input type="radio" name="paypal-amount" value="200">$200
								</label>
								<label class="radio-inline">
									<input type="radio" name="paypal-amount" value="400">$400
								</label>
							</div>
							<div class="form-group">
								<button class="btn btn-primary">Submit</button>
							</div>
							{{Form::close()}}
						</section>
					</div>
					<div class="tab-pane table-responsive" id="top-up-history">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No.</th>
									<th>Date/Time</th>
									<th>Method</th>
									<th>Amount</th>
									<th>Status</th>
								</tr>
								
							</thead>
							<tbody>
								@if($transactions != null)
								<?php $count = 1; ?>
								@foreach($transactions as $transaction)
								<tr>
									<td>{{$count}}</td>
									<td>{{date('d-m-Y H:i',strtotime($transaction->topup_datetime))}}</td>
									<td>
										@if($transaction->method == 1)
										Internet Transfer
										@elseif($transaction->method == 2)
										Paypal
										@endif
									</td>
									<td>
										@if($transaction->method == 2)
										{{number_format(ceil(($transaction->amount-0.50)*0.961),2);}}
										@else
										{{number_format($transaction->amount,2)}}
										@endif
									</td>
									<td>
										@if(isset($transaction->verify_datetime))
										Verified
										@else
										Pending Verification
										@endif
									</td>
								</tr>
								<?php $count += 1; ?>
								@endforeach
								@endif
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end widget content -->
		</div>
		<!-- end widget div -->
	</div>
</section>
@stop

@section('customJavascript')
<script>
$(function() {
	$( "#datePicker" ).datepicker({
		dateFormat: 'yy-mm-dd'
	});
	$('.caddy-action-tabs').on('click', 'a', function(){
		$('.alert').hide();
	});
});
</script>
@stop