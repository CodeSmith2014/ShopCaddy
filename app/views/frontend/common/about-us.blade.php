@extends('frontend.master')

@section('title')
@parent
- About Us
@stop

@section('before_hgroup')
<div class="full_page_photo" style="background-image: url(/assets/img/about_us.jpg);">
	<div class="container">
		<section class="call_to_action">
			<h3 class="animated bounceInDown">we really <strong>love</strong> what we do</h3>
			<h4 class="animated bounceInUp skincolored">while <strong>always trying</strong> to get the job done!</h4>
		</section>
	</div>
</div>
@stop

@section('hgroup')
<section class="hgroup">
	<h1>WHO WE ARE</h1>
	<h2>
		We provide procurement support to people, with the ease to purchase from any China website.
		We eliminate the hassle, for both consumers and businesses when they buy merchandise from China.
		Here at Shop Caddy, buying from China is made easy.
	</h2>
	<ul class="breadcrumb pull-right">
		<li><a href="index.html">Home</a> </li>
		<li class="active">About us</li>
	</ul>
</section>
@stop

@section('content')
<section class="article-text">
	<div class="row">
		<div class="col-sm-8 col-md-8">
			<h2>Shop Caddy Assisted Purchase Service</h2><br>
			<p class="columns_2">In hac habitasse platea dictumst. In hac habitasse platea dictumst. Donec aliquet tellus enim, a tincidunt nulla. Praesent mollis felis at nulla fermentum mattis. Vivamus vestibulum neque quis nunc convallis venenatis. Nulla tristique lorem sit amet ipsum ornare sit amet feugiat nulla condimentum. Sed faucibus volutpat nunc, at ullamcorper augue elementum id. Quisque at lectus leo, nec placerat mi. Curabitur egestas eleifend interdum. Suspendisse potenti. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem. Suspendisse quis sem lorem, a euismod nisl. Nullam eget tortor purus, id molestie sapien. Curabitur egestas eleifend interdum. Curabitur egestas eleifend interdum.</p>

			<blockquote class="left">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				<small>Clients are talking about us</small>
			</blockquote>

			<blockquote class="left">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				<small>Clients are talking about us</small>
			</blockquote>

		</div>
		<div class="col-sm-4 col-md-4">
			<div class="service_teaser vertical">
				<div class="service_photo">
					<figure style="background-image:url(/assets/img/serv_6.jpg)"></figure>
				</div>
				<div class="service_details">
					<h2 class="section_header skincolored"><b>Assisted Purchase<small>Check it out today!</small></h2>
					<a class="btn btn-primary" href="javascript:(0);">
						Click here &nbsp; <i class="fa fa-code-fork"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="article-text">
	<div class="row">
		<div class="col-sm-4 col-md-4">
			<div class="service_teaser vertical">
				<div class="service_photo">
					<figure style="background-image:url(/assets/img/serv_6.jpg)"></figure>
				</div>
				<div class="service_details">
					<h2 class="section_header skincolored"><b>Assisted Purchase<small>Check it out today!</small></h2>
					<a class="btn btn-primary" href="javascript:(0);">
						Click here &nbsp; <i class="fa fa-code-fork"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="col-sm-8 col-md-8">
			<h2>Shop Caddy Assisted Purchase Service</h2><br>
			<p class="columns_2">In hac habitasse platea dictumst. In hac habitasse platea dictumst. Donec aliquet tellus enim, a tincidunt nulla. Praesent mollis felis at nulla fermentum mattis. Vivamus vestibulum neque quis nunc convallis venenatis. Nulla tristique lorem sit amet ipsum ornare sit amet feugiat nulla condimentum. Sed faucibus volutpat nunc, at ullamcorper augue elementum id. Quisque at lectus leo, nec placerat mi. Curabitur egestas eleifend interdum. Suspendisse potenti. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem. Suspendisse quis sem lorem, a euismod nisl. Nullam eget tortor purus, id molestie sapien. Curabitur egestas eleifend interdum. Curabitur egestas eleifend interdum.</p>

			<blockquote class="left">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				<small>Clients are talking about us</small>
			</blockquote>

			<blockquote class="left">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				<small>Clients are talking about us</small>
			</blockquote>
		</div>
	</div>
</section>
@stop