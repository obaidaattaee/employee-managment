<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from 7xtheme.com/shapen-rtl/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Nov 2020 19:28:34 GMT -->
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>


	<div class="page-wraper">
        <!-- HEADER START -->
        <header class="site-header header-style-2">
			<!-- Search Form -->
            <div class="header-middle bg-white">
                <div class="container">
                    <div class="logo-header">
                        <a href="index.html">
                            <img src="images/logo-light.png" width="216" height="37" alt="" />
                        </a>
                    </div>
                    <div class="header-info">
                        <ul>
                        	<li>
                                <div class="icon-sm">
                                    <span class="icon-cell  text-primary"><i class="fa fa-map-marker"></i></span>
                                </div>
                                <div class="icon-content">
                                    <strong>{{ $companys->first()->address ?? "الدار البيضاء اول لفة عالشمال" }}</strong>

                                </div>
                            </li>
                            <li>

                                <div class="icon-sm">
                                    <span class="icon-cell  text-primary"><i class="fa fa-phone"></i></span>
                                </div>
                                <div class="icon-content">
                                    <strong>{{$companys->first()->phone ?? "+324 123 45 978"}}</strong>
                                    <span>الإثنين - الجمعة: 9.00 الساعة 18.00</span>
                                </div>

                            </li>
                            <li class="btn-col-last">
                                <a class="site-button-secondry btn-effect">اطلب اقتباس</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

			<!-- Search Form -->
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar header-botton nav-bg-secondry">
                    <div class="container">
                        <!-- NAV Toggle Button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- ETRA Nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="#search">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="extra-cell">
                                <a href="#" class="contact-slide-show"><i class="fa fa-angle-left arrow-animation"></i></a>
                            </div>
                        </div>
                        <!-- ETRA Nav -->
{{-- {{ dd($companys) }} --}}
                        <!-- Contact Nav -->
                        <div class="contact-slide-hide " style="background-image:url(images/background/bg-5.png)">
                            <div class="contact-nav">
                                 <a href="javascript:void(0)" class="contact_close">&times;</a>
                                 <div class="contact-nav-form p-a30">
                                    <div class="contact-info   m-b30">

                                        <div class="mt-icon-box-wraper center p-b30">
                                            <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-phone"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500"> رقم الهاتف</h5>
                                                <p>{{$companys->first()->phone ?? "(075) 123-7654" }}</p>
                                            </div>
                                        </div>

                                        <div class="mt-icon-box-wraper center p-b30">
                                            <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-envelope"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">عنوان بريد الكتروني</h5>
                                                <p>{{$companys->first()->email ?? "7xthemehelp@gmail.com" }}</p>
                                            </div>
                                        </div>

                                        <div class="mt-icon-box-wraper center p-b30">
                                            <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-map-marker"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">معلومات العنوان</h5>
                                                <p>{{$companys->first()->email ?? "201 شارع ليفربول ، جناح 721 ، لندن" }} </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="full-social-bg">
                                          <ul>
                                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="google"><i class="fa fa-google"></i></a></li>
                                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#" class="tumblr"><i class="fa fa-tumblr"></i></a></li>
                                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                          </ul>
                                    </div>
                                    <div class="text-center">
                                        <h4 class="font-weight-600">&copy;  {{ date('Y') }}</h4>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <!-- SITE Search -->
                        <div id="search">
                                <span class="close"></span>
                                <form role="search" id="searchform" action="http://7xtheme.com/search" method="get" class="radius-xl">
                                    <div class="input-group">
                                        <input value="" name="q" type="search" placeholder="اكتب للبحث"/>
                                        <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search arrow-animation"></i></button></span>
                                    </div>
                                </form>
                            </div>

                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse">
                            <ul class=" nav navbar-nav">
                                <li class="active">
                                    <a href="javascript:;">الصفحة الرئيسية</a>
                                 <ul class="sub-menu">

                                        <li>
                                            <a href="index.html">الصفحة الرئيسية -1</a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">الصفحة الرئيسية -2</a>
                                        </li>
                                        <li>
                                            <a href="index-3.html">لصفحة الرئيسية  أسلوب محاصر  -3 </a>
                                        </li>
                                        <li>
                                            <a href="index-4.html">الصفحة الرئيسية -4</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="about-1.html">معلومات عنا</a>
                                </li>
                                <li>
                                    <a href="services.html">خدمات</a>
                                </li>
                                <li>
                                    <a href="javascript:;">الصفحات</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:;">مدونة</a>
                                            <ul class="sub-menu has-child">
                                                <li><a href="blog-grid.html">شبكة المدونة</a></li>
                                                <li><a href="blog-listing.html">قائمة المدونات</a></li>
                                                <li><a href="blog-masonry.html">مدونة البناء</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="faq.html">التعليمات</a>
                                        </li>
                                        <li>
                                            <a href="error-404.html">خطأ 404</a>
                                        </li>
                                        <li>
                                            <a href="contact-1.html">اتصل بنا</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;">تفاصيل المشاركة</a>
                                    <ul class="sub-menu">
                                        <li><a href="post-image.html">نشر الصورة</a></li>
                                        <li><a href="post-gallery.html">معرض البريد</a></li>
                                        <li><a href="post-video.html">انشر الفيديو</a></li>
                                        <li><a href="post-right-sidebar.html">نشر الشريط الجانبي الأيمن</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:;">المشاريع</a>
                                    <ul class="sub-menu">
                                        <li><a href="project-grid.html">شبكة المشروع</a></li>
                                        <li><a href="project-masonry.html">مشروع الماسونية</a></li>
                                        <li><a href="project-carousel.html">مشروع كاروسيل</a></li>
                                        <li><a href="project-classic.html">مشروع كلاسيكي -1</a></li>
                                        <li><a href="project-classic2.html">مشروع كلاسيكي -2</a></li>
                                        <li><a href="project-detail.html">تفاصيل المشروع</a></li>
                                    </ul>
                                </li>
                                <li class="submenu-direction">
                                    <a href="javascript:;">تسجيل الدخول </a>
                                    <ul class="sub-menu">
                                        @guest
                                        <li><a href="{{ route('login') }}">تسجيل الدخول</a></li>

                                        @endguest
                                        @auth
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                     </a>

                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form>

                                        @endauth

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">


            <!-- SLIDER START -->
            <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" dir="ltr">
                <div id="rev_slider_one" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.3.1">
                    <ul>
                        <!-- SLIDE 1 -->
                        {{-- @if (count($slides) > 0)
                        @foreach ($slides as $item)

                        @endforeach


                        @endif --}}

                        <li data-index="rs-901"
                        data-transition="fade"
                        data-slotamount="default"
                        data-hideafterloop="0"
                        data-hideslideonmobile="off"
                        data-easein="default"
                        data-easeout="default"
                        data-masterspeed="default"
                        data-thumb="images/main-slider/slider2/slide1.jpg"
                        data-rotate="0"
                        data-fstransition="fade"
                        data-fsmasterspeed="300"
                        data-fsslotamount="7"
                        data-saveperformance="off"
                        data-title=""
                        data-param1=""
                        data-param2=""
                        data-param3=""
                        data-param4=""
                        data-param5=""
                        data-param6=""
                        data-param7=""
                        data-param8=""
                        data-param9=""
                        data-param10=""
                        data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/main-slider/slider2/slide1.jpg" alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""/>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 [ for overlay ] -->
                            <div class="tp-caption tp-shape tp-shapewrapper "
                            id="slide-901-layer-0"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                            data-width="full"
                            data-height="full"
                            data-whitespace="nowrap"
                            data-type="shape"
                            data-basealign="slide"
                            data-responsive_offset="off"
                            data-responsive="off"
                            data-frames='[
                            {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                            ]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 1;background-color:rgba(0, 0, 0, 0.0);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>




                            <!-- LAYER NR. 4 [ for title ] -->
                            <div class="tp-caption   tp-resizeme"
                            id="slide-901-layer-2"
                            data-x="['right','right','right','right']" data-hoffset="['50','130','130','130']"
                            data-y="['top','top','top','top']" data-voffset="['200','200','140','160']"
                            data-fontsize="['72','72','62','52']"
                            data-lineheight="['82','82','72','62']"
                            data-width="['700','700','700','96%']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"

                            data-type="text"
                            data-responsive_offset="on"
                           data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['right','right','right','right']"
                            data-paddingtop="[5,5,5,5]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 13;
                            white-space: normal;
                            font-weight: 700;
                            color:#111;
                            border-width:0px;font-family: 'Poppins', sans-serif; text-transform:uppercase ;">
                            <div>نحن نبني حلمك</div>

                            </div>

                            <!-- LAYER NR. 5 [ for block] -->




                            <!-- LAYER NR. 5 [ for block] -->
                            <div class="tp-caption   tp-resizeme"
                            id="slide-901-layer-4"
                            data-x="['right','right','right','right']" data-hoffset="['50','130','130','130']"
                            data-y="['top','top','top','top']" data-voffset="['310','310','260','260']"
                            data-fontsize="['20','20','38','28']"
                            data-lineheight="['28','28','48','38']"
                            data-width="['600','600','700','600']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"

                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['right','right','right','right']"
                            data-paddingtop="[5,5,5,5]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 13;
                            white-space: normal;
                            font-weight: 500;
                            color:#111;
                             border-width:0px;font-family: 'Poppins', sans-serif;">
                            من الحقائق الثابتة أن المحتوى الذي يمكن قراءته سيشتت انتباه القارئ.

                            </div>

                            <!-- LAYER NR. 5 [ for see all service botton ] -->
                            <div class="tp-caption tp-resizeme"
                            id="slide-901-layer-5"
                            data-x="['right','right','right','right']" data-hoffset="['50','130','130','130']"

                            data-y="['top','top','top','top']" data-voffset="['390','390','400','400']"
                            data-lineheight="['none','none','none','none']"
                            data-width="['300','300','300','300']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"

                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['right','right','right','right']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index:100; text-transform:uppercase; margin:10px">
                            <a href="javascript:;" class="site-button-secondry btn-effect">المزيد عن</a>
                            </div>


                            <!-- LAYER NR. 6 [ for see all service botton ] -->
                            <div class="tp-caption tp-resizeme"
                            id="slide-901-layer-6"
                            data-x="['right','right','right','right']" data-hoffset="['260','330','330','330']"

                            data-y="['top','top','top','top']" data-voffset="['390','390','400','400']"
                            data-lineheight="['none','none','none','none']"
                            data-width="['300','300','300','300']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"

                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['right','right','right','right']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index:100; text-transform:uppercase; margin:10px">
                            <a href="javascript:;" class="site-button btn-effect">اتصل بنا</a>
                            </div>
                        </li>


                        <!-- SLIDE 2 -->
                       <li data-index="rs-902"
                        data-transition="fade"
                        data-slotamount="default"
                        data-hideafterloop="0"
                        data-hideslideonmobile="off"
                        data-easein="default"
                        data-easeout="default"
                        data-masterspeed="default"
                        data-thumb="images/main-slider/slider2/slide2.jpg"
                        data-rotate="0"
                        data-fstransition="fade"
                        data-fsmasterspeed="300"
                        data-fsslotamount="7"
                        data-saveperformance="off"
                        data-title=""
                        data-param1=""
                        data-param2=""
                        data-param3=""
                        data-param4=""
                        data-param5=""
                        data-param6=""
                        data-param7=""
                        data-param8=""
                        data-param9=""
                        data-param10=""
                        data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/main-slider/slider2/slide2.jpg" alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="">
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 [ for overlay ] -->
                            <div class="tp-caption tp-shape tp-shapewrapper "
                            id="slide-902-layer-0"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                            data-width="full"
                            data-height="full"
                            data-whitespace="nowrap"
                            data-type="shape"
                            data-basealign="slide"
                            data-responsive_offset="off"
                            data-responsive="off"
                            data-frames='[
                            {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                            ]'
                            data-textAlign="['right','right','right','right']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 1;background-color:rgba(0, 0, 0, 0.0);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>




                            <!-- LAYER NR. 4 [ for title ] -->
                            <div class="tp-caption   tp-resizeme"
                            id="slide-902-layer-2"
                            data-x="['right','right','right','right']" data-hoffset="['50','130','130','130']"
                            data-y="['top','top','top','top']" data-voffset="['200','200','140','160']"
                            data-fontsize="['72','72','62','52']"
                            data-lineheight="['82','82','72','62']"
                            data-width="['700','700','700','96%']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"

                            data-type="text"
                            data-responsive_offset="on"
                           data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['right','right','right','right']"
                            data-paddingtop="[5,5,5,5]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 13;
                            white-space: normal;
                            font-weight: 700;
                            color:#111;
                            border-width:0px;font-family: 'Poppins', sans-serif; text-transform:uppercase ;">
                            <div>من المفهوم إلى الخلق.</div>

                            </div>

                            <!-- LAYER NR. 5 [ for block] -->




                            <!-- LAYER NR. 5 [ for block] -->
                            <div class="tp-caption   tp-resizeme"
                            id="slide-902-layer-4"
                            data-x="['right','right','right','right']" data-hoffset="['50','130','130','130']"
                            data-y="['top','top','top','top']" data-voffset="['310','310','260','300']"
                            data-fontsize="['20','20','38','28']"
                            data-lineheight="['28','28','48','38']"
                            data-width="['600','600','700','600']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"

                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['right','right','right','right']"
                            data-paddingtop="[5,5,5,5]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 13;
                            white-space: normal;
                            font-weight: 500;
                            color:#111;
                             border-width:0px;font-family: 'Poppins', sans-serif;">
                            من الحقائق الثابتة أن المحتوى الذي يمكن قراءته سيشتت انتباه القارئ.

                            </div>

                            <!-- LAYER NR. 6 [ for see all service botton ] -->
                            <div class="tp-caption tp-resizeme"
                            id="slide-902-layer-5"
                            data-x="['right','right','right','right']" data-hoffset="['50','130','130','130']"

                            data-y="['top','top','top','top']" data-voffset="['390','390','400','400']"
                            data-lineheight="['none','none','none','none']"
                            data-width="['300','300','300','300']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"

                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['right','right','right','right']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index:100; text-transform:uppercase;margin:10px">
                            <a href="javascript:;" class="site-button-secondry btn-effect ">المزيد عن</a>
                            </div>

                            <!-- LAYER NR. 6 [ for see all service botton ] -->
                            <div class="tp-caption tp-resizeme"
                            id="slide-902-layer-6"
                            data-x="['right','right','right','right']" data-hoffset="['260','330','330','330']"

                            data-y="['top','top','top','top']" data-voffset="['390','390','400','400']"
                            data-lineheight="['none','none','none','none']"
                            data-width="['300','300','300','300']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"

                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['right','right','right','right']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index:100; text-transform:uppercase; margin:10px">
                            <a href="javascript:;" class="site-button btn-effect">اتصل بنا</a>
                            </div>

                        </li>

                        <!-- SLIDE 2 -->

                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- SLIDER END -->
            @if (count($services) > 0)

                <!-- OUR SPECIALLIZATION START -->
                <div class="section-full bg-white slider-half-part">
                    <div class="container">
                        <!-- IMAGE CAROUSEL START -->
                        <div class="section-content">
                            <div class="row">
                                    @foreach ($services as $item)
                                    <div class="col-md-4 col-sm-4 m-b30">
                                        <div class="half-blocks">
                                            <div class="mt-icon-box-wraper center m-b30">
                                                <div class="half-block-content icon-count-2 p-a30 p-tb50">
                                                    <span class="icon-count-number">1</span>
                                                    <div class="mt-icon-box-lg radius bg-gray m-b20 scale-in-center">
                                                        <span class="icon-cell"><img src="images/icon/compass.png" alt=""></span>
                                                    </div>
                                                    <div class="icon-content">
                                                        <h4 class="mt-tilte m-b25">{{$item->title}}</h4>
                                                        <p>{{$item->summary}}</p>
                                                        <a href="#" class="site-button-link" data-hover="اقرأ أكثر">اقرأ أكثر <i class="fa fa-angle-right arrow-animation"></i></a>
                                                    </div>
                                                </div>
                                                <div class="bg-cover  half-blocks-bg" style="background-image:url(images/services/1.jpg)"></div>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach

                                {{-- <div class="col-md-4 col-sm-4 m-b30">
                                    <div class="half-blocks">
                                        <div class="mt-icon-box-wraper center m-b30">
                                            <div class="half-block-content icon-count-2 bg-gray p-a30 p-tb50">
                                                <span class="icon-count-number">2</span>
                                                <div class="mt-icon-box-lg radius bg-gray m-b20 scale-in-center">
                                                    <span class="icon-cell"><img src="images/icon/crane-1.png" alt=""></span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte m-b25">بناء اعمال بناء</h4>
                                                    <p>أداة البناء متاحة ، لكن الغالبية عانت من تغيير في شكل ما ، عن طريق الصدفة.</p>
                                                    <a href="#" class="site-button-link" data-hover="اقرأ أكثر">اقرأ أكثر <i class="fa fa-angle-right arrow-animation"></i></a>
                                                </div>
                                            </div>
                                            <div class="bg-cover  half-blocks-bg" style="background-image:url(images/services/3.jpg)"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 m-b0">
                                    <div class="half-blocks">
                                    <div class="mt-icon-box-wraper center m-b30">
                                        <div class="half-block-content icon-count-2 bg-gray p-a30 p-tb50">
                                            <span class="icon-count-number">3</span>
                                            <div class="mt-icon-box-lg radius bg-gray m-b20 scale-in-center">
                                                <span class="icon-cell"><img src="images/icon/renovation.png" alt=""></span>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="mt-tilte m-b25">بناء تجديد</h4>
                                                <p>أداة البناء متاحة ، لكن الغالبية عانت من تغيير في شكل ما ، عن طريق الصدفة.</p>
                                                <a href="#" class="site-button-link" data-hover="اقرأ أكثر">اقرأ أكثر <i class="fa fa-angle-right arrow-animation"></i></a>
                                            </div>
                                        </div>
                                        <div class="bg-cover  half-blocks-bg" style="background-image:url(images/services/2.jpg)"></div>
                                    </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
                <!-- OUR SPECIALLIZATION END -->
            @endif


            @if (count($abouts) > 0)

                <!-- ABOUT COMPANY START -->
                    <div class="section-full " style="background-image:url(images/background/bg-map.png)">
                        <div class="services-half-section-top " >
                            <div class="container">
                                <!-- TITLE START -->
                                <div class="section-head">
                                    <div class="mt-separator-outer separator-left text-wh">
                                        <div class="mt-separator">
                                            <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">حول</span> شركة</h2>
                                        </div>

                                    </div>
                                </div>
                                <!-- TITLE END -->

                                    <div class="section-content">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-12 col-sm-12">
                                                <div class="owl-carousel about-home about-home-v2 owl-dots-bottom-left">
                                                    <!-- COLUMNS 1 -->
                                                        @foreach ($abouts as $item)
                                                        <div class="item ">
                                                            <div class="mt-img-effect zoom-slow">
                                                                <a href="javascript:void(0);"><img src="{{ asset('uploads/public/'.$item->image) }}" style="max-height: 400px" alt=""></a>
                                                        </div>
                                                        </div>
                                                        @endforeach

                                                    <!-- COLUMNS 2 -->
                                                    {{-- <div class="item ">
                                                        <div class="mt-img-effect zoom-slow">
                                                            <a href="javascript:void(0);"><img src="images/gallery/pic6.jpg" alt=""></a>
                                                    </div>
                                                    </div> --}}
                                                    {{-- <!-- COLUMNS 3 -->
                                                    <div class="item ">
                                                        <div class="mt-img-effect zoom-slow">
                                                            <a href="javascript:void(0);"><img src="images/gallery/pic9.jpg" alt=""></a>
                                                    </div>
                                                    </div>
                                                    <!-- COLUMNS 4 -->
                                                    <div class="item ">
                                                        <div class="mt-img-effect zoom-slow">
                                                            <a href="javascript:void(0);"><img src="images/gallery/pic2.jpg" alt=""></a>
                                                    </div>
                                                    </div>
                                                    <!-- COLUMNS 5 -->
                                                    <div class="item ">
                                                        <div class="mt-img-effect zoom-slow">
                                                            <a href="javascript:void(0);"><img src="images/gallery/pic3.jpg" alt=""></a>
                                                    </div>
                                                    </div> --}}
                                            </div>
                                            </div>

                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <div class="about-home-right about-right-v2 bg-primary text-black p-a30">
                                                    <h3 class="m-t0"><span class="font-weight-100">ملتزم</span>لجودة ونتائج عالية.</h3>
                                                    <p><strong>خلافا للاعتقاد الشائع ، لوريم إيبسوم ليس كذلك
                                                            ببساطة نص. لها جذور في قطعة
                                                            الأدب اللاتيني الكلاسيكي من 45 قبل الميلاد ، مما يجعله
                                                            أكثر من 2000 سنة.</strong></p>

                                                    <div class="text-left">
                                                        <a href="#" class="site-button-secondry btn-effect">اقرأ أكثر</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="services-half-section-bottom p-t80 p-b50  bg-secondry bg-cover bg-center bg-no-repeat" style="background-image:url(images/background/bg5.jpg)">
                            <div class="container">
                                <div class="section-content">
                                    <div class="row">

                                        <div class="col-md-3 col-sm-6">
                                            <div class="text-primary mt-icon-box-wraper left m-b30">
                                                <span class="icon-md p-t10">
                                                    <i class="flaticon-city"></i>
                                                </span>
                                                <div class="icon-content text-white">
                                                    <div class="counter font-50 font-weight-800 m-b5">2500</div>
                                                    <span class="font-16">المشاريع المنجزة</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6">
                                            <div class="text-primary mt-icon-box-wraper left m-b30">
                                                <span class="icon-md p-t10">
                                                    <i class="flaticon-worker"></i>
                                                </span>
                                                <div class="icon-content text-white">
                                                    <div class="counter font-50 font-weight-800 m-b5">1500</div>
                                                    <span class="font-16">عميل سعيد</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6">
                                            <div class="text-primary mt-icon-box-wraper left m-b30">
                                                <span class="icon-md p-t10">
                                                    <i class="flaticon-crane"></i>
                                                </span>
                                                <div class="icon-content text-white">
                                                    <div class="counter font-50 font-weight-800 m-b5">840</div>
                                                    <span class="font-16">خدم الصناعات</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6">
                                            <div class="text-primary mt-icon-box-wraper left m-b0">
                                                <span class="icon-md p-t10">
                                                    <i class="flaticon-art-and-design"></i>
                                                </span>
                                                <div class="icon-content text-white">
                                                    <div class="counter font-50 font-weight-800 m-b5">180</div>
                                                    <span class="font-16">ترميم</span>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <!-- ABOUT COMPANY END -->
            @endif

            <!-- OUR VALUE START -->
            <div class="section-full p-t80 p-b50 bg-white mobile-page-padding">
                <div class="container">

						<div class="section-content">
                        	<div class="row">
                                <div class="col-md-7 col-sm-6">
                                	<div class="video-section-full-v2">
                                        <div class="video-section-full bg-no-repeat bg-cover overlay-wraper m-b30" style="background-image:url(images/video-bg2.jpg)">
                                            <div class="overlay-main bg-black opacity-04"></div>
                                            <div class="video-section-inner">
                                                <div class="video-section-content">
                                                <div class="video-section-left">
                                                     <a href="https://player.vimeo.com/video/34741214?color=ffffff&amp;title=0&amp;byline=0&amp;portrait=0" class="mfp-video play-now">
                                                        <i class="icon fa fa-play"></i>
                                                        <span class="ripple"></span>
                                                    </a>
                                                </div>
                                                <div class="video-section-right">
                                                    <a href="https://player.vimeo.com/video/34741214?color=ffffff&amp;title=0&amp;byline=0&amp;portrait=0" class="mfp-video font-weight-600 text-uppercase">عرض فيديو</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            	<div class="col-md-5 col-sm-6">
                                    <!-- TITLE START -->
                                    <div class="video-part-2">
                                            <h3><span class="font-weight-100">سوف نزود</span> أنت أفضل عمل حلمت به!</h3>
     										<p>من الحقائق الثابتة أن القارئ سيشتت انتباهه من خلال المحتوى المقروء للصفحة عند النظر في تصميمها. هناك العديد من الأشكال المختلفة للمقاطع مثل المتاحة</p>
                                            <ul class="list-angle-right anchor-line">
                                                <li><a href="#">اعمال بناء الإدارة</a></li>
                                                <li><a href="#">قبل اعمال بناء الخدمات</a></li>
                                                <li><a href="#">إدارة العقود</a></li>
                                            </ul>
                                    </div>
                                    <!-- TITLE END -->
                                    <div class="author-info author-info-v2 p-t20">

                                        <div class="author-signature">
                                            <img src="images/Signature%2bBlack.png" alt="Signature" width="150">
                                        </div>
                                        <div class="author-name">
                                            <h4 class="m-t0">ديفيد هوكر</h4>
                                            <p>العمارة والمؤسس</p>
                                        </div>
                                    </div>


                           		</div>
                    		</div>
                       </div>
                 </div>
            </div>
            <!-- OUR VALUE END -->

                <!-- OUR MISSION START -->
                <div class="section-full bg-dark ">
                    <div class="section-content">
                        <div class="container get-in-touch-form">

                            <div class="row">



                                <div class="col-md-6 col-sm-12">
                                    <div class="contact-home1-left contact-home1-left-v2 bg-dark p-a30 m-b30 p-t50">
                                        <h3 class="text-white m-t0"><span class="font-weight-100">أدخل</span> لمس. اتصال. صلة</h3>
                                        <form class="cons-contact-form2 form-transparent" method="post" action="http://7xtheme.com/shapen-rtl/form-handler2.php">

                                            <div class="input input-animate">
                                                <label for="name">اسم</label>
                                                <input type="text" name="username"  id="name" required>
                                                <span class="spin"></span>
                                            </div>

                                            <div class="input input-animate">
                                                <label for="email">البريد الإلكتروني</label>
                                                <input type="email" name="email"   id="email" required>
                                                <span class="spin"></span>
                                            </div>

                                            <div class="input input-animate">
                                                <label for="Phone">هاتف</label>
                                                <input type="text" name="phone"  id="Phone" required>
                                                <span class="spin"></span>
                                            </div>

                                            <div class="input input-animate">
                                                <label for="message">منطقة النص</label>
                                                <textarea name="message"  id="message" required></textarea>
                                                <span class="spin"></span>
                                            </div>

                                            <div class="text-left p-t10">
                                                <button type="submit" class="site-button btn-effect ">
                                                أرسل الآن
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <div class="get-in-touch-form-section">
                                    <div class="get-in-touch-form-section-img"><img src="images/s-pic-1.png" alt=""></div>
                                    <div class="get-in-touch-info arrow-animation">
                                        <div class="mt-icon-box-wraper  p-a20 left bg-white hover-shadow">
                                            <div class="icon-md m-b20 scale-in-center">
                                                <span class="icon-cell text-secondry"><img src="images/icon/icon-img-01.png" alt=""></span>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="mt-tilte m-b0">تجربة رائعة لبناء البناء والتجديد</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
                <!-- OUR MISSION  END -->
            @if (count($services) > 0 )
                <!-- OUR SERVICES START -->
                <div class="section-full p-t80 p-b50 bg-white mobile-page-padding" style="background-image:url(images/background/ptn-1.png)">
                    <div class="section-content">

                            <div class="container">
                                <!-- TITLE START -->
                                <div class="section-head m-b50">
                                    <div class="mt-separator-outer separator-left">
                                        <div class="mt-separator">
                                            <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">لنا</span> خدمات</h2>
                                        </div>
                                    </div>
                                    <h3>هناك العديد من الاختلافات في مقاطع لوريم إيبسوم المتاحة ، لكن الغالبية عانت من التغيير</h3>
                                </div>
                                <!-- TITLE END -->

                                <div class="row services-v2 no-col-gap">

                                    @foreach ($services as $item)


                                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">

                                        <div class="mt-icon-box-wraper bdr-l-1 bdr-solid bdr-gray">
                                            <div class="relative  p-a30">

                                                <div class="icon-md inline-icon m-b15 text-primary scale-in-center">
                                                    <span class="icon-cell"><img src="images/icon/crane-1.png" alt=""></span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte m-b25">{{ $item->title }}</h4>
                                                    <p>{{ $item->summary }}</p>
                                                    <a href="#" class="site-button-link" data-hover="اقرأ أكثر">اقرأ أكثر <i class="fa fa-angle-right arrow-animation"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach

                                    {{-- <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">

                                        <div class="mt-icon-box-wraper bdr-l-1 bdr-solid bdr-gray">
                                            <div class="relative  p-a30">

                                                <div class="icon-md inline-icon m-b15 text-primary scale-in-center">
                                                    <span class="icon-cell"><img src="images/icon/crane-1.png" alt=""></span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte m-b25">بناء <br>اعمال بناء</h4>
                                                    <p>أداة البناء متاحة ، لكن الغالبية عانت من تغيير في شكل ما ، عن طريق الصدفة.</p>
                                                    <a href="#" class="site-button-link" data-hover="اقرأ أكثر">اقرأ أكثر <i class="fa fa-angle-right arrow-animation"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">

                                        <div class="mt-icon-box-wraper bdr-l-1 bdr-solid bdr-gray">
                                            <div class="relative   p-a30 ">

                                                <div class="icon-md inline-icon m-b15 text-primary scale-in-center">
                                                    <span class="icon-cell"><img src="images/icon/renovation.png" alt=""></span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte m-b25">بناء <br>تجديد</h4>
                                                    <p>أداة البناء متاحة ، لكن الغالبية عانت من تغيير في شكل ما ، عن طريق الصدفة.</p>
                                                    <a href="#" class="site-button-link" data-hover="اقرأ أكثر">اقرأ أكثر <i class="fa fa-angle-right arrow-animation"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">

                                        <div class="mt-icon-box-wraper bdr-l-1 bdr-solid bdr-gray">
                                            <div class="relative p-a30 ">

                                                <div class="icon-md inline-icon m-b15 text-primary scale-in-center">
                                                    <span class="icon-cell"><img src="images/icon/toolbox.png" alt=""></span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte m-b25">بناء <br>اعمال صيانة</h4>
                                                    <p>أداة البناء متاحة ، لكن الغالبية عانت من تغيير في شكل ما ، عن طريق الصدفة.</p>
                                                    <a href="#" class="site-button-link" data-hover="اقرأ أكثر">اقرأ أكثر <i class="fa fa-angle-right arrow-animation"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">

                                        <div class="mt-icon-box-wraper bdr-l-1 bdr-solid bdr-gray">
                                            <div class="relative   p-a30 ">

                                                <div class="icon-md inline-icon m-b15 text-primary scale-in-center">
                                                    <span class="icon-cell"><img src="images/icon/compass.png" alt=""></span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte m-b25">هندسة معمارية<br>التصميم</h4>
                                                    <p>أداة البناء متاحة ، لكن الغالبية عانت من تغيير في شكل ما ، عن طريق الصدفة.</p>
                                                    <a href="#" class="site-button-link" data-hover="اقرأ أكثر">اقرأ أكثر <i class="fa fa-angle-right arrow-animation"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">

                                        <div class="mt-icon-box-wraper bdr-l-1 bdr-solid bdr-gray">
                                            <div class="relative   p-a30 ">

                                                <div class="icon-md inline-icon m-b15 text-primary scale-in-center">
                                                    <span class="icon-cell"><img src="images/icon/idea.png" alt=""></span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte m-b25">اعمال بناء <br> استشاري</h4>
                                                    <p>أداة البناء متاحة ، لكن الغالبية عانت من تغيير في شكل ما ، عن طريق الصدفة.</p>
                                                    <a href="#" class="site-button-link" data-hover="اقرأ أكثر">اقرأ أكثر <i class="fa fa-angle-right arrow-animation"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">

                                        <div class="mt-icon-box-wraper bdr-l-1 bdr-solid bdr-gray">
                                            <div class="relative  p-a30 ">

                                                <div class="icon-md inline-icon m-b15 text-primary scale-in-center">
                                                    <span class="icon-cell"><img src="images/icon/dump-truck.png" alt=""></span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte m-b25">مواد <br> يتبرع</h4>
                                                    <p>أداة البناء متاحة ، لكن الغالبية عانت من تغيير في شكل ما ، عن طريق الصدفة.</p>
                                                    <a href="#" class="site-button-link" data-hover="اقرأ أكثر">اقرأ أكثر <i class="fa fa-angle-right arrow-animation"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">

                                        <div class="mt-icon-box-wraper bdr-l-1 bdr-solid bdr-gray">
                                            <div class="relative  p-a30">

                                                <div class="icon-md inline-icon m-b15 text-primary scale-in-center">
                                                    <span class="icon-cell"><img src="images/icon/architecture.png" alt=""></span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte m-b25">منزل <br> تجديد</h4>
                                                    <p>أداة البناء متاحة ، لكن الغالبية عانت من تغيير في شكل ما ، عن طريق الصدفة.</p>
                                                    <a href="#" class="site-button-link" data-hover="اقرأ أكثر">اقرأ أكثر <i class="fa fa-angle-right arrow-animation"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">

                                        <div class="mt-icon-box-wraper bdr-l-1 bdr-solid bdr-gray">
                                            <div class="relative p-a30 ">

                                                <div class="icon-md inline-icon m-b15 text-primary scale-in-center">
                                                    <span class="icon-cell"><img src="images/icon/planning.png" alt=""></span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte m-b25">الداخلية <br>التصميم</h4>
                                                    <p>أداة البناء متاحة ، لكن الغالبية عانت من تغيير في شكل ما ، عن طريق الصدفة.</p>
                                                    <a href="#" class="site-button-link" data-hover="اقرأ أكثر">اقرأ أكثر <i class="fa fa-angle-right arrow-animation"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div> --}}

                                </div>

                            </div>
                    </div>

                </div>
                <!-- OUR SERVICES  END -->
            @endif
            <!-- CALL US SECTION START -->
            <div class="section-full p-tb80 overlay-wraper bg-center bg-parallax bg-cover"  data-stellar-background-ratio="0.5" style="background-image:url(images/background/bg-10.jpg)">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">

						<div class="section-content">
							<div class="call-us-section text-center text-white">
								<h4 class="m-b15">فلنعمل معًا</h4>
                                <h2 class="call-us-number m-b15 m-b0">{{ $companys->first()->phone ?? "(+291)-456-789-1234" }}</h2>
                                <h4 class="call-us-address m-t0 m-b20">{{ $companys->first()->address ?? "شارع 4 ، 45 مدينة نيويورك" }}</h4>
                                <a href="#" class="site-button btn-effect">اتصل بنا</a>
							</div>
						</div>

                </div>
            </div>
            <!-- CALL US SECTION END -->
            @if (count($projects) > 0)
                <div class="section-full p-t80 p-b30 square_shape2 mobile-page-padding" >
                    <div class="container">
                        <!-- TITLE START -->
                        <div class="section-head">
                            <div class="mt-separator-outer separator-center">
                                <div class="mt-separator">
                                    <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">لنا</span> مشروع</h2>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->
                            <div class="section-content">

                                <div class="filter-wrap text-center">
                                    <ul class="filter-navigation inline-navigation masonry-filter link-style  text-uppercase">
                                        <li class="active"><a data-filter="*" href="#" data-hover="الكل">الكل</a></li>

                                        @foreach ($projects as $item)
                                        <li><a data-filter=".cat-{{ $item->service()->first()->id }}" href="#" data-hover="{{ $item->service()->first()->title }}"> {{ $item->service()->first()->title }}</a></li>

                                        @endforeach
                                        {{-- <li><a data-filter=".cat-1" href="#" data-hover="اعمال بناء">اعمال بناء</a></li>
                                        <li><a data-filter=".cat-2" href="#" data-hover="تجديد">تجديد</a></li>
                                        <li><a data-filter=".cat-3" href="#" data-hover="في الخارج">في الخارج</a></li>
                                        <li><a data-filter=".cat-4" href="#" data-hover="الداخلية">الداخلية </a></li>
                                        <li><a data-filter=".cat-5" href="#" data-hover="مستشار">مستشار</a></li> --}}
                                    </ul>
                                </div>

                            </div>
                            <div class="section-content">

                                <div class="portfolio-wrap row mfp-gallery product-stamp clearfix">
                                    <!-- COLUMNS 1 -->
                                    @foreach ($projects as $item)
                                    <div class="masonry-item  cat-{{$item->service()->first()->id}} col-md-4 col-sm-6 m-b30">
                                        <div class="image-effect-one hover-shadow">
                                            <img src="images/projects/square/pic4.jpg" alt="" />
                                            <div class="figcaption">
                                                <h4>{{$item->title}}</h4>
                                                <p>{{ $item->service()->first()->title }}</p>
                                                <a href="#"><i class="link-plus bg-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{-- <div class="masonry-item  cat-1 col-md-4 col-sm-6 m-b30">
                                        <div class="image-effect-one hover-shadow">
                                            <img src="images/projects/square/pic4.jpg" alt="" />
                                            <div class="figcaption">
                                                <h4>2 طوابق البيت</h4>
                                                <p>البناء والداخلية</p>
                                                <a href="#"><i class="link-plus bg-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- COLUMNS 2 -->
                                    <div class="masonry-item  cat-2 col-md-4 col-sm-6 m-b30">
                                        <div class="image-effect-one hover-shadow">
                                            <img src="images/projects/square/pic2.jpg" alt="" />
                                            <div class="figcaption">
                                                <h4>مباني المدينة</h4>
                                                <p>المباني والهندسة</p>
                                                <a href="#"><i class="link-plus bg-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- COLUMNS 3 -->
                                    <div class="masonry-item  cat-3 col-md-4 col-sm-6 m-b30">
                                        <div class="image-effect-one hover-shadow">
                                            <img src="images/projects/square/pic3.jpg" alt="" />
                                            <div class="figcaption">
                                                <h4>غرفة المعيشة</h4>
                                                <p>العقبة ، الأردن</p>
                                                <a href="#"><i class="link-plus bg-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- COLUMNS 4 -->
                                    <div class="masonry-item  cat-4 col-md-4 col-sm-6 m-b30">
                                        <div class="image-effect-one hover-shadow">
                                            <img src="images/projects/square/pic5.jpg" alt="" />
                                            <div class="figcaption">
                                                <h4>هندسة الجسر</h4>
                                                <p>التصميم والبناء</p>
                                                <a href="#"><i class="link-plus bg-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- COLUMNS 5 -->
                                    <div class="masonry-item  cat-5 col-md-4 col-sm-6 m-b30">
                                        <div class="image-effect-one hover-shadow">
                                            <img src="images/projects/square/pic7.jpg" alt="" />
                                            <div class="figcaption">
                                                <h4>فوجيات نولا</h4>
                                                <p>الهندسة والداخلية</p>
                                                <a href="#"><i class="link-plus bg-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- COLUMNS 6 -->
                                    <div class="masonry-item  cat-4 col-md-4 col-sm-6 m-b30">
                                        <div class="image-effect-one hover-shadow">
                                            <img src="images/projects/square/pic6.jpg" alt="" />
                                            <div class="figcaption">
                                                <h4>كامبردج شكاك</h4>
                                                <p>اعمال بناء</p>
                                                <a href="#"><i class="link-plus bg-primary"></i></a>
                                            </div>
                                        </div>
                                    </div> --}}

                                </div>

                            </div>

                    </div>

                </div>
                <!-- OUR PROJECT START -->
            @endif


            @if (count($teams) > 0)


                <!-- OUR Team START -->
                    <div class="section-full p-t80 p-b50 square_shape1 bg-parallax bg-cover "  data-stellar-background-ratio="0.5" style="background-image:url(images/background/bg5.jpg);">
                        <div class="container">

                            <!-- TITLE START -->
                            <div class="section-head text-center text-white ">
                                <div class="mt-separator-outer separator-center">
                                    <div class="mt-separator">
                                        <h2 class="text-white text-uppercase sep-line-one "><span class="font-weight-300 text-primary" >لنا </span> الفريق</h2>
                                    </div>
                                </div>
                                <h2>اكتشف فريق الثقة وخبرائنا</h2>
                            </div>
                            <!-- TITLE END -->

                            <!-- IMAGE CAROUSEL START -->
                            <div class="section-content">
                                <div class="row">
                                    @foreach ($teams as $item)
                                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30   ">
                                        <div class="our-team-2 ">
                                          <div class="profile-image scale-in-center"><img src="{{ asset('uploads/public/' . $item->image) }}" alt="" /></div>
                                         	 <div class="figcaption text-black">
                                                 <h4>{{ $item->name }}</h4>
                                                 <h5>{{ $item->job }}</h5>

                                                 <div class="icons">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"> <i class="fa fa-twitter"></i></a>
                                                    <a href="#"> <i class="fa fa-instagram"></i></a>
                                                    <a href="#"><i class="fa fa-rss"></i></a>
                                                    <a href="#"> <i class="fa fa-youtube"></i></a>
                                                    <a href="#"> <i class="fa fa-linkedin"></i></a>
                                                </div>
                                              </div>
                                          </div>
                                    </div>
                                    @endforeach
                                    {{-- <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30   ">
                                        <div class="our-team-2 ">
                                          <div class="profile-image scale-in-center"><img src="images/our-team5/pic4.png" alt="" /></div>
                                         	 <div class="figcaption text-black">
                                                 <h4>آفي بيتون </h4>
                                                 <h5>الرئيس التنفيذي والمعماري</h5>

                                                 <div class="icons">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"> <i class="fa fa-twitter"></i></a>
                                                    <a href="#"> <i class="fa fa-instagram"></i></a>
                                                    <a href="#"><i class="fa fa-rss"></i></a>
                                                    <a href="#"> <i class="fa fa-youtube"></i></a>
                                                    <a href="#"> <i class="fa fa-linkedin"></i></a>
                                                </div>
                                              </div>
                                          </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30   ">
                                        <div class="our-team-2 ">
                                          <div class="profile-image scale-in-center"><img src="images/our-team5/pic3.png" alt="" /></div>
                                          	<div class="figcaption text-black">
                                              <h4>بن جونسون </h4>
                                              <h5>مهندس معماري </h5>

                                            <div class="icons">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"> <i class="fa fa-twitter"></i></a>
                                                <a href="#"> <i class="fa fa-instagram"></i></a>
                                                <a href="#"><i class="fa fa-rss"></i></a>
                                                <a href="#"> <i class="fa fa-youtube"></i></a>
                                                <a href="#"> <i class="fa fa-linkedin"></i></a>
                                            </div>
                                          </div>
                                          </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30   ">
                                        <div class="our-team-2 ">
                                          <div class="profile-image scale-in-center"><img src="images/our-team5/pic2.png" alt="" /></div>
                                              <div class="figcaption text-black">
                                                  <h4>اشلي فليتشر </h4>
                                                  <h5>المالية</h5>

                                                  <div class="icons">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"> <i class="fa fa-twitter"></i></a>
                                                    <a href="#"> <i class="fa fa-instagram"></i></a>
                                                    <a href="#"><i class="fa fa-rss"></i></a>
                                                    <a href="#"> <i class="fa fa-youtube"></i></a>
                                                    <a href="#"> <i class="fa fa-linkedin"></i></a>
                                                  </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30   ">
                                        <div class="our-team-2">
                                          <div class="profile-image scale-in-center"><img src="images/our-team5/pic5.png" alt="" /></div>
                                              <div class="figcaption text-black">
                                                  <h4>اشلي فليتشر </h4>
                                                  <h5>المالية</h5>
                                                  <div class="icons">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"> <i class="fa fa-twitter"></i></a>
                                                    <a href="#"> <i class="fa fa-instagram"></i></a>
                                                    <a href="#"><i class="fa fa-rss"></i></a>
                                                    <a href="#"> <i class="fa fa-youtube"></i></a>
                                                    <a href="#"> <i class="fa fa-linkedin"></i></a>
                                                  </div>
                                              </div>
                                        </div>
                                    </div> --}}

                                </div>
                            </div>

                        </div>
                     </div>
                <!-- OUR Team END -->
            @endif


            @if (count($packages) > 0)


             <!-- Our PRICING PLAN -->
                <div class="section-full text-center bg-gray bg-no-repeat p-t80 p-b50 bg-top-right mobile-page-padding" style="background-image:url(images/background/bg-4.png)">
                    <div class="container">

                        <!-- TITLE START -->
                        <div class="section-head">
                            <div class="mt-separator-outer separator-center">
                                <div class="mt-separator">
                                    <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary" >لنا </span> التسعير</h2>
                                </div>
                            </div>

                        </div>
                        <!-- TITLE END -->

                        <div class="section-content">
                            <div class="pricingtable-row">
                                <div class="row">
                                    @foreach ($packages as $item)
                                    <div class="col-lg-4  col-md-4 col-sm-4  col-xs-6 col-xs-100pc  m-b30">
                                        <div class="pricingtable-wrapper pricing-table-style-5 bg-white overflow-hide hover-shadow bdr-t-4 bdr-solid bdr-primary">
                                            <div class="pricingtable-inner">
                                                <div class="pricingtable-title">
                                                    <h4>{{ $item->name }}</h4>
                                                </div>

                                                <div class="pricingtable-price">
                                                    <span class="pricingtable-bx">{{ $item->price }}</span>
                                                    <span class="pricingtable-type">{{ $item->long }}</span>
                                                </div>

                                                <ul class="pricingtable-features text-black">
                                                    {{-- {{ dd($item)  }} --}}
                                                    @foreach (json_decode($item->prop) as $item)
                                                    <li>{{$item}}</li>
                                                    @endforeach
                                                    {{-- <li>الدعم عبر الهاتف والبريد الإلكتروني  </li>
                                                    <li>3 الحساب الاجتماعي</li>
                                                    <li>تقارير ذات علامة تجارية </li> --}}
                                                </ul>

                                                <div class="pricingtable-footer">
                                                    <a href="javascript:void(0);" class="site-button btn-effect">عملية الشراء</a>
                                                </div>

                                                <div class="overlay-main bg-white opacity-07"></div>
                                            </div>

                                        </div>
                                    </div>
                                    @endforeach
                                                                    {{-- <div class="col-lg-4  col-md-4 col-sm-4  col-xs-6 col-xs-100pc  m-b30">
                                        <div class="pricingtable-wrapper pricing-table-style-5 bg-white overflow-hide hover-shadow bdr-t-4 bdr-solid bdr-primary">
                                            <div class="pricingtable-inner">
                                                <div class="pricingtable-title">
                                                    <h4>الخطة الأساسية</h4>
                                                </div>

                                                <div class="pricingtable-price">
                                                    <span class="pricingtable-bx">$29</span>
                                                    <span class="pricingtable-type">شهر</span>
                                                </div>

                                                <ul class="pricingtable-features text-black">
                                                    <li>الدعم عبر الهاتف والبريد الإلكتروني  </li>
                                                    <li>3 الحساب الاجتماعي</li>
                                                    <li>تقارير ذات علامة تجارية </li>
                                                </ul>

                                                <div class="pricingtable-footer">
                                                    <a href="javascript:void(0);" class="site-button btn-effect">عملية الشراء</a>
                                                </div>

                                                <div class="overlay-main bg-white opacity-07"></div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4  col-sm-4  col-xs-6 col-xs-100pc m-b30">
                                        <div class="pricingtable-wrapper  pricing-table-style-5 overflow-hide hover-shadow bdr-t-4 bdr-solid bdr-primary">
                                            <div class="pricingtable-inner">

                                                <div class="pricingtable-title">
                                                    <h4>خطة للمحترفين</h4>
                                                </div>

                                                <div class="pricingtable-price">
                                                    <span class="pricingtable-bx">$49</span>
                                                    <span class="pricingtable-type">شهر</span>
                                                </div>

                                                <ul class="pricingtable-features text-black">
                                                    <li>الدعم عبر الهاتف والبريد الإلكتروني  </li>
                                                    <li>3 الحساب الاجتماعي</li>
                                                    <li>تقارير ذات علامة تجارية </li>
                                                </ul>

                                                <div class="pricingtable-footer">
                                                    <a href="javascript:void(0);" class="site-button btn-effect">عملية الشراء</a>
                                                </div>

                                                <div class="overlay-main bg-white opacity-07"></div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4  col-sm-4  col-xs-12 m-b30">
                                        <div class="pricingtable-wrapper  pricing-table-style-5 overflow-hide hover-shadow bdr-t-4 bdr-solid bdr-primary bg-gray">
                                            <div class="pricingtable-inner">

                                                <div class="pricingtable-title">
                                                    <h4>الخطة المميزة</h4>
                                                </div>

                                                <div class="pricingtable-price">
                                                    <span class="pricingtable-bx">$99</span>
                                                    <span class="pricingtable-type">شهر</span>
                                                </div>

                                                <ul class="pricingtable-features text-black">
                                                    <li>الدعم عبر الهاتف والبريد الإلكتروني  </li>
                                                    <li>3 الحساب الاجتماعي</li>
                                                    <li>تقارير ذات علامة تجارية </li>
                                                </ul>

                                                <div class="pricingtable-footer">
                                                    <a href="javascript:void(0);" class="site-button btn-effect">عملية الشراء</a>
                                                </div>

                                                <div class="overlay-main bg-white opacity-07"></div>
                                            </div>

                                        </div>
                                    </div> --}}

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Our PRICING PLAN -->
            @endif
            <!-- CLIENT LOGO SECTION START -->
            <div class="section-full p-t10 bg-white ">
                <div class="container">
                    <div class="section-content">

                        <!-- TESTIMONIAL 4 START ON BACKGROUND -->
                        <div class="section-content">
                             <div class="section-content p-tb10 owl-btn-vertical-center">
                                <div class="owl-carousel home-client-carousel-2">

                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w1.png" alt=""></a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w2.png" alt=""></a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w3.png" alt=""></a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w4.png" alt=""></a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w5.png" alt=""></a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="images/client-logo/w6.png" alt=""></a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CLIENT LOGO  SECTION End -->

            <!-- TESTIMONIALS SECTION START -->
            <div class="section-full p-t80 bg-dark square_shape2  square_shape1 bg-moving" style="background-image:url(images/background/bg-6.png)">
                <div class="container">
                    <div class="section-content">

                        <!-- TITLE START -->
                        <div class="section-head">
                            <div class="mt-separator-outer separator-center">
                                <div class="mt-separator">
                                    <h2 class="text-white text-uppercase sep-line-one "><span class="font-weight-300 text-primary">عميل</span> الشهادات - التوصيات</h2>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->

                            <!-- TESTIMONIAL START -->
                         <div class="owl-carousel testimonial-home-2 p-b120">
                            <div class="item">
                           		 <div class="col-sm-12 col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">
                                	<div class="testimonial-1 testimonial-bg m-a30 hover-animation-1 text-center text-white">
                                        <div class="testimonial-detail clearfix">
                                            <div class="testimonial-pic radius shadow scale-in-center"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                        </div>
                                        <div class="testimonial-text">
                                            <span class="fa fa-quote-right"></span>
                                            <p>دعم العملاء الممتاز! القالب نفسه منتهي جدًا. ببساطة نص وهمي للطباعة والصناعة. صناعة الطباعة والتنضيد. كانت لوريم إيبسوم هي الصناعة</p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <h4 class="testimonial-name m-b5">شيلي جونسون -</h4>
                                            <span class="testimonial-position">رجل أعمال</span>
                                        </div>
                                    </div>
                                </div>
                             </div>
                            <div class="item">
                           		 <div class="col-sm-12 col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">
                                	<div class="testimonial-1 testimonial-bg m-a30 hover-animation-1 text-center text-white">
                                        <div class="testimonial-detail clearfix">
                                            <div class="testimonial-pic radius shadow scale-in-center"><img src="images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
                                        </div>
                                        <div class="testimonial-text">
                                            <span class="fa fa-quote-right"></span>
                                            <p>دعم العملاء الممتاز! القالب نفسه منتهي جدًا. ببساطة نص وهمي للطباعة والصناعة. صناعة الطباعة والتنضيد. كانت لوريم إيبسوم هي الصناعة</p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <h4 class="testimonial-name m-b5">شيلي جونسون -</h4>
                                            <span class="testimonial-position">رجل أعمال</span>
                                        </div>
                                    </div>
                                </div>
                             </div>
                            <div class="item">
                           		 <div class="col-sm-12 col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">
                                	<div class="testimonial-1 testimonial-bg m-a30 hover-animation-1 text-center text-white">
                                        <div class="testimonial-detail clearfix">
                                            <div class="testimonial-pic radius shadow scale-in-center"><img src="images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
                                        </div>
                                        <div class="testimonial-text">
                                            <span class="fa fa-quote-right"></span>
                                            <p>دعم العملاء الممتاز! القالب نفسه منتهي جدًا. ببساطة نص وهمي للطباعة والصناعة. صناعة الطباعة والتنضيد. كانت لوريم إيبسوم هي الصناعة</p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <h4 class="testimonial-name m-b5">شيلي جونسون -</h4>
                                            <span class="testimonial-position">رجل أعمال</span>
                                        </div>
                                    </div>
                                 </div>
                             </div>
                        </div>
                    </div>
            	</div>
            </div>
            <!-- TESTIMONIALS SECTION END -->



        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <footer class="site-footer footer-large  footer-light	footer-wide">
            <div class="container call-to-action-wrap bg-no-repeat bg-center" style="background-image:url(images/background/bg-site.png);">
                <div class="p-a30  bg-primary">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="call-to-action-left text-black">
                                <h4 class="text-uppercase m-b10 m-t0">اشترك في نشرتنا الإخبارية!</h4>
                                <span>لا تفوت أي شيء من الشكل بالتسجيل في النشرة الإخبارية.</span>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="call-to-action-right">
                                <div class="widget_newsletter">
                                    <div class="newsletter-bx">
                                        <form role="search" method="post">
                                            <div class="input-group">
                                                <input name="news-letter" class="form-control" placeholder="أدخل بريدك الإلكتروني" type="text">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <!-- FOOTER BLOCKES START -->
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget_about">
                                <!--<h4 class="widget-title">About Company</h4>-->
                                <div class="logo-footer clearfix p-b15">
                                    <a href="index.html"><img src="images/logo-light.png" alt=""></a>
                                </div>
								<p class="max-w400">اليوم يمكننا أن نخبرك ، بفضل شغفك وإبداعك في العمل الشاق وخبرتك ، لقد قدمت لنا أجمل إطلالات المنزل.</p>

                                <ul class="social-icons  mt-social-links">
                                    <li><a href="{{ $companys->first()->google ?? "" }}" class="fa fa-google"></a></li>
                                    <li><a href="{{ $companys->first()->instagram ?? "" }}" class="fa fa-rss"></a></li>
                                    <li><a href="{{ $companys->first()->face ?? "" }}" class="fa fa-facebook"></a></li>
                                    <li><a href="{{ $companys->first()->twitter ?? "" }}" class="fa fa-twitter"></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- RESENT POST -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget_address_outer">
                                <h4 class="widget-title">اتصل بنا</h4>
                                <ul class="widget_address">
                                    <li>{{ $companys->first()->address ?? "" }}</li>
                                    <li>{{ $companys->first()->email ?? "" }}</li>
                                    <li>{{ $companys->first()->phone ?? "" }}</li>

                                </ul>

                            </div>
                        </div>

                        <!-- USEFUL LINKS -->
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-col-3">
                            <div class="widget widget_services inline-links">
                                <h4 class="widget-title">روابط مفيدة</h4>
                                <ul>
                                    <li><a href="about-1.html">حول</a></li>
                                    <li><a href="project-grid.html">المشاريع</a></li>
                                    <li><a href="blog-grid.html">مدونة</a></li>
                                    <li><a href="contact-1.html">اتصل بنا</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- TAGS -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
							<div class="widget recent-posts-entry-date">
                                <h4 class="widget-title">المنشور الاخير</h4>
                                <div class="widget-post-bx">
                                    <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                        <div class="mt-post-date text-center text-uppercase text-white p-tb5">
											<strong class="p-date">24</strong>
                                            <span class="p-month">أبريل</span>
                                            <span class="p-year">2019</span>
                                        </div>
                                        <div class="mt-post-info">
                                            <div class="mt-post-header">
                                                <h6 class="post-title"><a href="blog-single.html">على هذه الحزم ، نبني الأحلام.</a></h6>
                                            </div>
                                            <div class="mt-post-meta">
                                                <ul>
                                                    <li class="post-author"><i class="fa fa-user"></i>بواسطة المشرف</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                        <div class="mt-post-date text-center text-uppercase text-white p-tb5">
                                            <strong class="p-date">30</strong>
                                            <span class="p-month">مايو</span>
                                            <span class="p-year">2019</span>
                                        </div>
                                        <div class="mt-post-info">
                                            <div class="mt-post-header">
                                                <h6 class="post-title"><a href="blog-single.html">سنكون ضجة كبيرة بالنسبة لك التجديد المقبل</a></h6>
                                            </div>
                                            <div class="mt-post-meta">
                                                <ul>
                                                    <li class="post-author"><i class="fa fa-user"></i>بواسطة المشرف</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 29</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- NEWSLETTER -->

                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <div class="mt-footer-bot-center">
                            <span class="copyrights-text">© 2018 Your Company. Designed By 7xtheme.</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->


        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>


    </div>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-loader">جار التحميل</div>
    </div>
</div>
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
@if (session()->get('msg'))
<script>

    swal('{{session()->get('msg')}}');
</script>
@endif

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
