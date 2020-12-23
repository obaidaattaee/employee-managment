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
        {{-- @include("frontend.layouts.admin.header") --}}
        
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(images/banner/4.jpg);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="mt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="m-b0">نموزج الانجاز اليومي للموظف !</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->

                            <div>
                                <ul class="mt-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">الصفحة الرئيسية</a></li>
                                    <li>اتصل بنا</li>
                                </ul>
                            </div>

                        <!-- BREADCRUMB ROW END -->
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- SECTION CONTENTG START -->
            <div class="section-full p-tb80 inner-page-padding">
                <!-- LOCATION BLOCK-->
                <div class="container">

                    <!-- GOOGLE MAP & CONTACT FORM -->
                    <div class="section-content">
                        <!-- CONTACT FORM-->
                        <div class="row">
                        	<div class="col-md-8 col-sm-6">
                            	<form class="contact-form cons-contact-form" method="post" action="http://7xtheme.com/shapen-rtl/form-handler.php">
                                    <div class="contact-one m-b30">

                                    <!-- TITLE START -->
                                    <div class="section-head">
                                        <div class="mt-separator-outer separator-left">
                                            <div class="mt-separator">
                                                <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary"> آراء  </span>  العملاء </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TITLE END -->
                                        <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label>اسم العميل</label>
                                            <input name="username" type="text" required class="form-control" placeholder="اسم العميل">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>رقم الجوال</label>
                                            <input name="username" type="text" required class="form-control" placeholder="رقم الجوال">
                                        </div>


                                            <div class="col-md-6 form-group">
                                            <label>اسم الموظف  </label>
                                            <input name="username" type="text" required class="form-control" placeholder="اسم الموظف العامل">
                                        </div>

                                            <div class="col-md-6 form-group">
                                            <label> مكان العمل</label>
                                            <input name="username" type="text" required class="form-control" placeholder="مكان العمل">
                                        </div>

                                            <div class="col-md-6 form-group">
                                            <label>التقييم </label>
                                            <select name="username" type="text" required class="form-control" placeholder="تقييم العامل ">
                                                <option>اختر </option>
                                                <option> موظف ممتاز</option>
                                            </select>
                                        </div>

                                            <div class="col-md-6 form-group">
                                            <label> الصور</label>
                                            <input name="email" type="text" class="form-control" required placeholder="الصور ">
                                        </div>

                                            <div class="col-md-6 form-group">
                                            <label> ملاحظات </label>
                                            <textarea name="message" rows="4" class="form-control " required placeholder="ملاحظات"></textarea>
                                        </div>

                                    </div>
                                    	<div class="text-right">
                                            <button name="submit" type="submit" value="Submit" class="site-button btn-effect">إرسال

                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-6">
                            	<div class="contact-info m-b30">
                                    <!-- TITLE START -->
                                    <div class="section-head">
                                        <div class="mt-separator-outer separator-left">
                                            <div class="mt-separator">
                                                <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">اتصل</span> معلومات</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TITLE END -->
                                    <div class="bg-dark p-a20 text-white">
                                        <div class="mt-icon-box-wraper left p-b40">
                                            <div class="icon-xs"><i class="fa fa-phone"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">رقم الهاتف</h5>
                                                <p>(123) 456-78910</p>
                                            </div>
                                        </div>

                                        <div class="mt-icon-box-wraper left p-b40">
                                            <div class="icon-xs"><i class="fa fa-envelope"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">عنوان بريد الكتروني</h5>
                                                <p>7xthemehelp@gmail.com</p>
                                            </div>
                                        </div>

                                        <div class="mt-icon-box-wraper left">
                                            <div class="icon-xs"><i class="fa fa-map-marker"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">معلومات العنوان</h5>
                                                <p>09 ، شارع مارتن B190 بولو ألتو ، سان فرانسيسكو</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
           </div>

            <!-- SECTION CONTENT END -->

        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        {{-- @include('frontend.layouts.admin.footer'); --}}

        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    </div>


<!-- LOADING AREA START ===== -->
{{-- @include('frontend.layouts.admin.loading') --}}

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
