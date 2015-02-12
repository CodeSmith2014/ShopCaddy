@extends('frontend.master')

@section('title')
@parent
- Activate Account
@stop

@section('before_hgroup')

@stop

@section('hgroup')
<section class="hgroup">
	<h1>Activate Account</h1>
	<ul class="breadcrumb pull-right">
		<li>{{ HTML::link('/', 'Home') }}</li>
		<li>{{ HTML::link('/login', 'Register/Login') }}</li>
		<li class="active">Activate Account</li>
	</ul>
</section>
@stop

@section('content')
<section>
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="signup">
				<div class="social_sign">
					<h3>Activate your Shop Caddy Account!</h3>
				</div>
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="form col-lg-8">
						{{Form::open(array('url'=>URL::route('verify.store', array($token)), 'method'=>'POST'))}}
							<button type="submit" class="btn btn-primary btn-lg">Activate</button>
						{{ Form::close() }}
					</div>
					<div class="col-lg-2"></div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop