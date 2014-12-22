@extends('frontend.master')

@section('title')
@parent
- Contact Us
@stop

@section('content')
<div class="main">
	<div class="container">
		<section class="hgroup">
			<h1>Contact us</h1>
			<h2>Our customer service team is available 24/7 to answer all your questions.</h2>
			<ul class="breadcrumb pull-right">
				<li><a href="index.html">Home</a></li>
				<li class="active">Contact</li>
			</ul>
		</section>
		<section>
			<div class="row">
				<div class="office_address col-sm-4 col-md-4">
					<div class="team_member">
						<img src="/assets/img/restart_logo.png" width="90" height="90" alt="logo">
						<h5>Shop Caddy</h5>
						<small>Procyon SG Private Limited</small><br><br>
						<div class="team_social"> <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/leonartgr"><i class="fa fa-twitter"></i></a> <a href="#pinterest"><i class="fa fa-linkedin"></i></a> <a href="https://github.com/PlethoraThemes"><i class="fa fa-github-alt"></i></a> </div>
						<address>
							<strong></strong><br>
							21 Toh Guan Road East #07-06,<br>
							Toh Guan Centre Singapore 608609<br>
						</address>
						<address>
							<abbr title="Phone">E:</abbr> <a href="mailto:#">support@shop-caddy.com</a>
						</address>
					</div>
				</div>
				<div class="contact_form col-sm-8 col-md-8">
					<form name="contact_form" id="contact_form" method="post">
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<label>Name</label>
								<input name="name" id="name" class="form-control" type="text" value="">
							</div>
							<div class="col-sm-6 col-md-6">
								<label>E-mail</label>
								<input name="email" id="email" class="form-control" type="text" value="">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<label>Subject</label>
								<input name="subject" id="subject" class="form-control" type="text">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<label>Message</label>
								<textarea name="message" id="message" rows="8" class="form-control"></textarea>
							</div>
							<div class="col-sm-12 col-md-12"><br/>
								<a id="submit_btn" class="btn btn-primary" name="submit">Submit Message</a> <span id="notice" class="alert alert-warning alert-dismissable hidden" style="margin-left:20px;"></span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>
</div>
@stop