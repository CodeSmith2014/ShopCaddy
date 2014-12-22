@extends('frontend.master')

@section('title')
@parent
- Bring the world to you
@stop

@section('before_hgroup')
<section id="slider_wrapper" class="slider_wrapper full_page_photo">
	<div id="main_flexslider" class="flexslider">
		<ul class="slides">
			<li class="item" style="background-image: url(/assets/img/1.jpg)">
				<div class="container">
					<div class="carousel-caption">
						<h1>a <strong>flexible</strong> theme<br> you can <strong>trust</strong> &amp; <strong>build upon</strong>!</h1>
						<p class="lead skincolored">
							Re<strong>start</strong> is based on <strong>good typography</strong> and <strong>large photography</strong>, serving as a foundation for your creative projects. Feel free to browse its templates and discover its features.
						</p>
						<span class="round_badge"><strong><i class="fa fa-twitter"></i></strong><strong>V3</strong></span>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
@stop

@section('content')
<section class="call_to_action">
	<h3>focus on what’s important</h3>
	<h4>and  make the web a little bit  prettier</h4>
	<a class="btn btn-primary btn-lg" href="#">Buy this theme!</a>
</section>
<section class="features_teasers_wrapper">
	<div class="row">
		<div class="feature_teaser col-sm-4 col-md-4">
			<img alt="responsive" src="images/responsive.png">
			<h3>Clean, Responsive Design</h3>
			<p>A multipurpose but mainly<strong> business oriented</strong> design, built to serve as a foundation for your web projects. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem.</p>
		</div>
		<div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="images/git.png">
			<h3>Based on Twitter Bootstrap</h3>
			<p>The front-end development framework with a <strong>steep learning curve</strong>. It changes the way you develop sites. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem.</p>
		</div>
		<div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="images/less.png">
			<h3>Makes real use of {LESS}</h3>
			<p><strong>Restart</strong> comes with a style.less file that tries to use all the power of <strong>{less} and bootstrap combined</strong>. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem.</p>
		</div>
	</div>
</section>

<section class="clients_section wow animated fadeInUp">
	<h2 class="section_header elegant centered">Our clients<small>all of them are satisfied</small></h2>
	<div class="clients_list"> <a href="#"><img src="images/clients/wordpress.jpg" alt="client"></a> <a href="#"><img src="images/clients/jquery.jpg" alt="client"></a> <a href="#"><img src="images/clients/microlancer.jpg" alt="client"></a> <a href="#"><img src="images/clients/bbpress.jpg" alt="client"></a> <a href="#"><img src="images/clients/wpml.jpg" alt="client"></a> </div>
</section>
@stop