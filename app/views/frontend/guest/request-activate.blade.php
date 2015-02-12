@extends('frontend.master')

@section('title')
@parent
- Request Account Activation Email
@stop

@section('before_hgroup')

@stop

@section('hgroup')
<section class="hgroup">
	<h1>Request Account Activation Email</h1>
	<ul class="breadcrumb pull-right">
		<li>{{ HTML::link('/', 'Home') }}</li>
		<li>{{ HTML::link('/login', 'Register/Login') }}</li>
		<li class="active">Request Account Activation Email</li>
	</ul>
</section>
@stop

@section('content')
<section>
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="signup">
				<div class="social_sign">
					<h3>Request Account Activation Email</h3>
				</div>
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="form col-lg-8">
						<p class="sign_title">Enter the email address associated with your Shopcaddy.com account, then click Send Email.<br>We'll email you a link to a page where you can easily activate your account.</p>
						{{Form::open(array('url'=>URL::route('request.store'), 'method'=>'POST'))}}
							{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address', 'required'=>''))}}
							<button type="submit" class="btn btn-primary btn-lg">Send Email</button>
						{{ Form::close() }}
					</div>
					<div class="col-lg-2"></div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop