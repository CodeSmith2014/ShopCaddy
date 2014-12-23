@extends('frontend.master')

@section('title')
@parent
- Register / Login
@stop

@section('content')
<div class="main">
	<div class="container">
		<section class="hgroup">
			<h1>Register or Sign in</h1>
			<ul class="breadcrumb pull-right">
				<li><a href="index.html">Home</a> </li>
				<li class="active">Register of Sign in</li>
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
								{{ Form::open(['route' => 'sessions.store']) }}
									<input placeholder="Email" class="form-control" required="required" name="email" type="text">
									<input placeholder="Password" class="form-control" required="required" name="password" type="password" value="">
									<div class="forgot">
										<div class="checkbox">
											<label class="">
												<input type="checkbox">
												Remember me 
											</label>
										</div>
										<a href="#">Forgot password?</a>
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
						<form>
							<fieldset>
								<div class="social_sign">
									<h3>Don't have a site account yet?</h3>
								</div>
								<p class="sign_title">Create one now, it's fast &amp; free!</p>
								<div class="row">
									<div class="col-lg-2"></div>
									<div class="col-lg-8">
										<input id="Username" name="Username" placeholder="Username" class="form-control" required="" type="text">
										<input id="Emailaddress" name="Email address" placeholder="Email address" class="form-control" required="" type="text">
										<input id="CfmEmailaddress" name="Cfm Email address" placeholder="Confirm Email address" class="form-control" required="" type="text">
										<input id="Password" name="Password" placeholder="Password" class="form-control" required="" type="password">
										<div class="checkbox">
											<label class="">
												<input name="checkboxes" value="Option one" type="checkbox">
												I agree to the <a href="/">terms and conditions</a>
											</label>
										</div>
									</div>
									<div class="col-lg-2"></div>
								</div>
								<button type="submit" class="btn btn-success btn-lg">Create account</button>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@stop

