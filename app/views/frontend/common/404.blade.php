@extends('frontend.master')

@section('title')
@parent
- Page Not Found
@stop

@section('content')
<div class="full_page_photo" style="background-image: url(images/404.jpg);">
	<div class="container">
		<section class="call_to_action">
			<h3 class="animated bounceInDown">OMG! <strong>error 404</strong></h3>
			<h4 class="animated bounceInUp">we are really sorry but the page you requested cannot be found.</h4>
		</section>
	</div>
</div>
<div class="main">
	<div class="container">
		<section class="call_to_action four-o-four"> <i class="fa fa-ambulance"></i>
			<h3>error 404 is nothing to really worry about...</h3>
			<h4>you may have mis-typed the URL, please check your spelling and try again.</h4>
		</section>
	</div>
</div>
@stop