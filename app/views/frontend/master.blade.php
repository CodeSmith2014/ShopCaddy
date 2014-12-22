<!doctype html>
<html class="no-js" lang="en">
<head>
     <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,300italic" rel="stylesheet" type="text/css">
     <meta charset="utf-8">
     <title>
          @section('title')
          Shop Caddy
          @show
     </title>
     <meta name="apple-mobile-web-app-capable" content="yes">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- #CSS Links -->
     {{HTML::style("/assets/css/animate.css")}}
     {{HTML::style("/assets/js/woothemes-FlexSlider-06b12f8/flexslider.css")}}
     {{HTML::style("/assets/js/prettyPhoto_3.1.5/prettyPhoto.css")}}
     {{HTML::style("/assets/css/style.css")}}
     {{HTML::style("/assets/fonts/font-awesome/css/font-awesome.min.css")}}
     {{HTML::style("/assets/css/mystyle.css")}}

     <!-- END -->

     <!-- #Javascript Link -->
     {{HTML::script("/assets/js/modernizr.custom.48287.js");}}

     <!-- Fav and touch icons -->
     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/img/apple-touch-icon-114x114-precomposed.png">
     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/img/apple-touch-icon-72x72-precomposed.png">
     <link rel="apple-touch-icon-precomposed" href="/assets/img/apple-touch-fa-57x57-precomposed.png">
     <link rel="shortcut icon" href="/assets/img/favicon.png">
</head>
<body>
     @include('frontend.member.navigation')
     @yield('before_hgroup')
     <div class="main">
          <div class="container">
               @yield('hgroup')
               @yield('content')
          </div>
     </div>
     @yield('modals');
     @include('frontend.common.footer')

     <script src="http://code.jquery.com/jquery-latest.min.js"></script>
     <script>window.jQuery || document.write('<script src="js/jquery-1.9.0.min.js"><\/script>')</script>
     {{HTML::script("/assets/js/bootstrap.min.js");}}
     {{HTML::script("/assets/js/woothemes-FlexSlider-06b12f8/jquery.flexslider-min.js");}}
     {{HTML::script("/assets/js/prettyPhoto_3.1.5/jquery.prettyPhoto.js");}}
     {{HTML::script("/assets/js/isotope/jquery.isotope.min.js");}}
     {{HTML::script("/assets/js/jquery.ui.totop.js");}}
     {{HTML::script("/assets/js/easing.js");}}
     {{HTML::script("/assets/js/wow.min.js");}}
     {{HTML::script("/assets/js/snap.svg-min.js");}}
     {{HTML::script("/assets/js/restart_theme.js");}}
     {{HTML::script("/assets/js/collapser.js");}}
</body>

</html>