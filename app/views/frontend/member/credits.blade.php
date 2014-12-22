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
		Current balance: <strong>$100.00</strong><br>
		Pending balance: <strong>$100.00</strong>
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
								<div class="pricing_plan">
									<h3><strong>Step 2</strong> <small>Verification Form</small></h3>
									<div class="the_price">
										<img src="/assets/img/credits1.jpg" alt="" class="img-circle" />
									</div>
									<div class="the_offerings">
										<p>Fill in the form in order to verify your top up.</p>
										<div class="form-group">
											<div class="input-group">
												<div class="input-group-addon">$</div>
												<input type="text" class="form-control" placeholder="Transferred Amount" />
											</div>
										</div>
										<div class="form-group">
											<div class="form-inline" style="width:100%;">
												<input type="text" class="form-control" placeholder="Transferred Timing" />
												<select class="form-control">
													<option>00:00</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>0</option>
												</select>
											</div>
										</div>
										<a href="#" class="btn btn-primary btn-lg">Submit</a> 
									</div>
								</div>
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
							<div class="form-group">
								Choose the amount you wish to top up:
								<label class="radio-inline">
									<input type="radio">$25
								</label>
								<label class="radio-inline">
									<input type="radio">$50
								</label>
								<label class="radio-inline">
									<input type="radio">$100
								</label>
								<label class="radio-inline">
									<input type="radio">$200
								</label>
								<label class="radio-inline">
									<input type="radio">$400
								</label>
							</div>
							<div class="form-group">
								<a href="#" class="btn btn-primary">Submit</a>
							</div>
						</section>

					</div>
				</div>
			</div>
			<!-- end widget content -->
		</div>
		<!-- end widget div -->
	</div>
</section>
@stop