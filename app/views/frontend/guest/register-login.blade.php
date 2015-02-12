@extends('frontend.master')

@section('title')
@parent
- Register / Login
@stop

@section('content')
<div class="main">
	<div class="container">
		<section class="hgroup">
			<h1>Register/Login</h1>
			<ul class="breadcrumb pull-right">
				<li>{{ HTML::link('/', 'Home') }}</li>
				<li class="active">Register/Login</li>
			</ul>
		</section>
		<section>
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<div class="signin">
						<h3 class="sign_title">Log in with your site account</h3>
						<div class="row">
							<div class="col-lg-2"></div>
							<div class="form col-lg-8">
								{{Form::open(array('url'=>URL::route('sessions.store'), 'method'=>'POST'))}}
									{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email', 'required'=>''))}}
									{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password', 'required'=>''))}}
									<div class="forgot">
										<div class="checkbox">
											<label class="">
												{{ Form::checkbox('remember', 'remember') }}
												Remember me 
											</label>
										</div>
										{{ HTML::link('/forgot-password', 'Forgot password?') }}
									</div>
									<button type="submit" class="btn btn-primary btn-lg">Sign in</button>
								{{ Form::close() }}
							</div>
							<div class="col-lg-2"></div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-6">
					<div class="signup">
						<div class="social_sign">
							<h3>Don't have a site account yet?</h3>
						</div>
						<p class="sign_title">Create one now, it's fast &amp; free!</p>
						<div class="row">
							<div class="col-lg-2"></div>
							<div class="col-lg-8">
								{{Form::open(array('url'=>URL::route('registration.store'), 'method' => 'POST'))}}
									{{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'Username', 'required'=>''))}}
									{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email address', 'required'=>''))}}
									{{ Form::text('email_confirmation', null, array('class'=>'form-control', 'placeholder'=>'Email address Confirmation', 'required'=>''))}}
									{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password', 'required'=>''))}}								
									<div class="checkbox">
										<label class="">
											{{ Form::checkbox('checkbox', 'yes') }}
											I agree to the {{ HTML::link('/terms-conditions', 'terms and conditions', array('target'=>'_blank')) }}
										</label>
									</div>
									<button type="submit" class="btn btn-success btn-lg">Create account</button>
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

