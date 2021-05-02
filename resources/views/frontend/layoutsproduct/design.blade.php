<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{asset('frontend/css/core.css')}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{asset('frontend/css/shortcode/shortcodes.css')}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- User style -->
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">


    <!-- Modernizr JS -->
    <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class="wrapper fixed__footer">
    <!-- Start Header Style -->
    @include('frontend.layoutsproduct.header')
    <!-- Start BLog Area -->
    @yield('content')
    <!-- End BLog Area -->
    <!-- Start Footer Area -->
    @include('frontend.layoutsproduct.footer')
    <!-- End Footer Area -->
</div>
<!-- Body main wrapper end -->
<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="{{asset('frontend/js/vendor/jquery-1.12.0.min.js')}}"></script>
<!-- Bootstrap framework js -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- All js plugins included in this file. -->
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<script src="{{asset('frontend/js/slick.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<!-- Waypoints.min.js')}}. -->
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>
