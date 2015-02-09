<!doctype html>
<html class="no-js" lang="en">
<head>
     <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,300italic" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
     <meta charset="utf-8">
     <title>
          @section('title')
          Shop Caddy
          @show
     </title>
     <meta name="apple-mobile-web-app-capable" content="yes">
     <meta name="_token" content="{{ csrf_token() }}" />
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- #CSS Links -->
     {{HTML::style("/assets/css/animate.css")}}
     {{HTML::style("/assets/js/woothemes-FlexSlider-06b12f8/flexslider.css")}}
     {{HTML::style("/assets/js/prettyPhoto_3.1.5/prettyPhoto.css")}}
     {{HTML::style("/assets/fonts/font-awesome/css/font-awesome.min.css")}}
     {{HTML::style("/assets/css/style.css")}}
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
     @if (!Sentry::check())
     @include('frontend.guest.navigation')
     @else
     @include('frontend.member.navigation')
     @endif
     @yield('before_hgroup')
     <div class="main">
          <div class="container">
               @yield('hgroup')
               @if($errors->count() > 0)
               <div class="alert alert-block alert-danger">
                    <ul style="list-style:none;">
                         @foreach($errors->all() as $error_message)
                         <li>{{$error_message}}</li>
                         @endforeach
                    </ul>
               </div>
               @endif

               @if(isset($message))
               <div class="alert alert-block alert-success">
                    <ul style="list-style:none;">
                         <li>{{$message}}</li>
                    </ul>
               </div>
               @endif             
               @yield('content')
          </div>
     </div>
     @yield('modals')
     @include('frontend.common.footer')
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
     <script>
     if (!window.jQuery) {
          document.write('<script src="/backend/assets/js/libs/jquery-2.1.1.min.js"><\/script>');
     }
     </script>

     <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
     <script>
     if (!window.jQuery.ui) {
          document.write('<script src="/backend/assets/js/libs/jquery-ui-1.10.3.min.js"><\/script>');
     }
     </script>
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
     {{HTML::script("/assets/js/global.js");}}
     @yield('pageRelatedScripts')
     @yield('customJavascript')
</body>

</html>