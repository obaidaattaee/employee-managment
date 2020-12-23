<!DOCTYPE html>

<html lang="en">


<!-- Mirrored from 7xtheme.com/shapen-rtl/contact-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Nov 2020 19:39:55 GMT -->
<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png')}}" />

    <!-- PAGE TITLE HERE -->
    <title>Shapen Template | Home Page Style 2</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif] -->

    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-rtl.min.css')}}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome/css/font-awesome.min.css')}}" />


    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css')}}">

    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css')}}">

    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/loader.min.css')}}">

    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.min.css')}}">

    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <!-- RTL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rtl.css')}}">

    <!-- Color Theme Change Css -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('css/skin/skin-1.css')}}">

    <!-- Side Switcher Css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/switcher.css')}}">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/settings.css')}}">

    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/navigation.css')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body id="bg">

    <div class="page-wraper">

        <!-- HEADER START -->
        @include("site.layouts.header")

        <!-- HEADER END -->

@yield('content')

        <!-- FOOTER START -->
        {{-- @include('frontend.layouts.admin.footer'); --}}

        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    </div>


<!-- LOADING AREA START ===== -->
@include('site.layouts.footer')

<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= -->
<script  src="{{ asset('js/jquery-1.12.4.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script  src="{{ asset('js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->

<script  src="{{ asset('js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->

<script  src="{{ asset('js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script  src="{{ asset('js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script  src="{{ asset('js/waypoints-sticky.min.js')}}"></script><!-- COUNTERUP JS -->

<script  src="{{ asset('js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->

<script  src="{{ asset('js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->
<script src="{{ asset('js/jquery.owl-filter.js')}}"></script>

<script  src="{{ asset('js/stellar.min.js')}}"></script><!-- PARALLAX BG IMAGE   -->



<script  src="{{ asset('js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script  src="{{ asset('js/shortcode.js')}}"></script><!-- SHORTCODE FUCTIONS  -->
<script  src="{{ asset('js/jquery.bgscroll.js')}}"></script><!-- BACKGROUND SCROLL -->
<script src="{{ asset('js/switcher.js')}}"></script><!-- SWITCHER FUCTIONS  -->
<!-- REVOLUTION JS FILES -->

<script  src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script  src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script  src="{{ asset('plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="{{ asset('js/rev-script-2.js')}}"></script>

<!-- STYLE SWITCHER  ======= -->
<div class="styleswitcher">

    <div class="switcher-btn-bx">
        <a class="switch-btn">
            <span class="fa fa-cog fa-spin"></span>
        </a>
    </div>

    <div class="styleswitcher-inner">

        <h6 class="switcher-title">لون البشرة </h6>
        <ul class="color-skins">
            <li><a class="theme-skin skin-1" href="index-2a39b.html?theme=css/skin/skin-1" title="default Theme"></a></li>
            <li><a class="theme-skin skin-2" href="index-261e7.html?theme=css/skin/skin-2" title="pink Theme"></a></li>
            <li><a class="theme-skin skin-3" href="index-2cce5.html?theme=css/skin/skin-3" title="sky Theme"></a></li>
            <li><a class="theme-skin skin-4" href="index-213f7.html?theme=css/skin/skin-4" title="green Theme"></a></li>
            <li><a class="theme-skin skin-5" href="index-219a6.html?theme=css/skin/skin-5" title="red Theme"></a></li>
            <li><a class="theme-skin skin-6" href="index-2fe5c.html?theme=css/skin/skin-6" title="orange Theme"></a></li>
            <li><a class="theme-skin skin-7" href="index-2ab47.html?theme=css/skin/skin-7" title="purple Theme"></a></li>
            <li><a class="theme-skin skin-8" href="index-25f8d.html?theme=css/skin/skin-8" title="blue Theme"></a></li>
        </ul>

    </div>
</div>
<!-- STYLE SWITCHER END ==== -->

</body>


<!-- Mirrored from 7xtheme.com/shapen-rtl/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Nov 2020 19:30:54 GMT -->
</html>
