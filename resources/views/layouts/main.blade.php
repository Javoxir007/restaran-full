<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Restaurant Cafe HTML Template">
        <meta name="author" content="ThemeEaster">

        <title>Caferio | @yield('title')</title>

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/food-icon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/venobox.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/splitting-cells.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/splitting.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/keyframe-animation.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

        <script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    </head>

    <body class="header-1">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div><!-- /.site-preloader-wrap -->

        @include('includes/navbar')

        @yield('content')

        @include('includes/footer')

		<div id="scrollup">
            <button id="scroll-top" class="scroll-to-top"><i class="las la-arrow-up"></i></button>
        </div>

		<!-- jQuery Lib -->
		<script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
		<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
		<script src="{{ asset('assets/js/vendor/jquery.isotope.v3.0.2.js') }}"></script>
		<script src="{{ asset('assets/js/vendor/splitting.min.js') }}"></script>
		<script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
		<script src="{{ asset('assets/js/vendor/swiper.min.js') }}"></script>
		<script src="{{ asset('assets/js/vendor/venobox.min.js') }}"></script>
		<script src="{{ asset('assets/js/vendor/simpleParallax.min.js') }}"></script>
		<script src="{{ asset('assets/js/vendor/smooth-scroll.js') }}"></script>
		<script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
		<script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
		<script src="{{ asset('assets/js/booking.js') }}"></script>
		<script src="{{ asset('assets/js/main.js') }}"></script>

    </body>
</html>