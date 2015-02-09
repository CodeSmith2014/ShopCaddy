@extends('frontend.master')

@section('title')
@parent
- Forgot Password
@stop

@section('content')
<div class="main">
	<div class="container">
		<section class="hgroup">
			<h1>Forgot Password</h1>
			<ul class="breadcrumb pull-right">
				<li>{{ HTML::link('/', 'Home') }}</li>
				<li>{{ HTML::link('/login', 'Register/Login') }}</li>
				<li class="active">Forgot Password</li>
			</ul>
		</section>
		<section>
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="signup">
						<div class="social_sign">
							<h3>Password Recovery</h3>
						</div>
						<div class="row">
							<div class="col-lg-2"></div>
							<div class="form col-lg-8">
								<p class="sign_title">Enter the email address associated with your Shopcaddy.com account, then click Send Email.<br>We'll email you a link to a page where you can easily create a new password.</p>
								{{Form::open(array('url'=>URL::route('forgot.store'), 'method'=>'POST'))}}
									{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email', 'required'=>''))}}
									<button type="submit" class="btn btn-primary btn-lg">Send Email</button>
								{{ Form::close() }}
							</div>
							<div class="col-lg-2"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@stop

