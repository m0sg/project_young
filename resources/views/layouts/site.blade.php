<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=" - Responsive Personal vCard Template">
    <meta name="keywords"
          content="Martin Luther, resume, cv, portfolio, personal, developer, designer, onepage, clean, modern, velocity, web">
    <meta name="author" content="Martin">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!--
    ========================================================================
     EXCLUSIVE ON themeforest.net
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
     Template Name   : Martin Luther - Responsive Personal Portfolio Template
     Author          : mital_04
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
     Copyright (c) 2017 - Martin Luther - mital_04

    ========================================================================
    -->
    <title>Martin Luther - Personal Portfolio Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
          rel="stylesheet">

    <!-- End -->

    <!-- Plugin Css -->
    <link href="{{ asset('assets/plugin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugin/owl-carousel/css/owl.carousel.min.css') }}" rel="stylesheet">
    <!-- End -->

    <!-- Theme css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color/green.css') }}" rel="stylesheet">
    <!-- End -->

    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<!-- ========== Body Starts ========== -->
<body>
<div id="loading">
    <div class="load-circle"><span class="one"></span></div>
</div>

<!-- ========== Header Starts ========== -->
<header class="header">
    @yield('header')
</header>
<!-- ========== End Of Header ========== -->
    @yield('content')


<!-- Jquery -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<!-- End -->

<!-- Plugin JS -->
<script src="{{ asset('assets/plugin/bootstrap/js/bootstrap.js') }}"></script><!--bootstrap-->
<script src="{{ asset('assets/plugin/parallax/parallax.min.js') }}"></script><!-- parallax library -->
<script src="{{ asset('assets/plugin/mixitup/mixitup.min.js') }}"></script><!-- mixitup -->
<script src="{{ asset('assets/plugin/owl-carousel/js/owl.carousel.min.js') }}"></script><!-- owl-carousel -->
<!-- End -->

<!-- Theme Js -->
<script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/home.js') }}"></script><!-- Only For Home page -->
<!-- End -->





</body>
<!-- ========== End of Body ========== -->
</html>