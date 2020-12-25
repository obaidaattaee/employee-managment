<header class="site-header header-style-2">
    <!-- Search Form -->
    <div class="header-middle bg-white">
        @foreach($companys as $company)

        <div class="container">
            <div class="logo-header">
                <a href="index.html">
                    <img src="{{ asset('images/logo-light.png')}}" width="216" height="37" alt="" />
                </a>
            </div>
            <div class="header-info">
                <ul>
                    <li>
                        <div class="icon-sm">
                            <span class="icon-cell  text-primary"><i class="fa fa-map-marker"></i></span>
                        </div>
                        <div class="icon-content">
                            <strong>{{$company->address}}</strong>
                        </div>
                    </li>
                    <li>

                        <div class="icon-sm">
                            <span class="icon-cell  text-primary"><i class="fa fa-phone"></i></span>
                        </div>
                        <div class="icon-content">
                            <strong>{{$company->phone}}</strong>
                        </div>

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
                    {{-- <div class="extra-cell">
                        <a href="#search">
                            <i class="fa fa-search"></i>
                        </a>
                    </div > --}}

                    <div class="extra-cell">
                        <a href="#" class="contact-slide-show"><i class="fa fa-angle-left arrow-animation"></i></a>
                    </div>

                </div>
                <!-- ETRA Nav -->

                <!-- Contact Nav -->
                <div class="contact-slide-hide " style="background-image:url(images/background/bg-5.png)">
                    <div class="contact-nav">
                         <a href="javascript:void(0)" class="contact_close">&times;</a>
                         <div class="contact-nav-form p-a30">
                            <div class="contact-info   m-b30">

                                <div class="mt-icon-box-wraper center p-b30">
                                    <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-phone"></i></div>
                                    <div class="icon-content">
                                        <h5 class="m-t0 font-weight-500">رقم الهاتف</h5>
                                        <p>{{$company->phone}}</p>
                                    </div>
                                </div>

                                <div class="mt-icon-box-wraper center p-b30">
                                    <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-envelope"></i></div>
                                    <div class="icon-content">
                                        <h5 class="m-t0 font-weight-500">عنوان بريد الكتروني</h5>
                                        <p>{{$company->email}}</p>
                                    </div>
                                </div>

                                <div class="mt-icon-box-wraper center p-b30">
                                    <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-map-marker"></i></div>
                                    <div class="icon-content">
                                        <h5 class="m-t0 font-weight-500">معلومات العنوان</h5>
                                        <p>{{$company->address}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="full-social-bg">
                                  <ul>
                                  <li><a href="@if($company->face){{$company->face}}@else{{"#"}}@endif" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="@if($company->google){{$company->google}}@else{{"#"}}@endif" class="google"><i class="fa fa-google"></i></a></li>
                                        <li><a href="@if($company->insta){{$company->insta}}@else{{"#"}}@endif" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="@if($company->twitter){{$company->twitter}}@else{{"#"}}@endif" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                  </ul>
                            </div>
                         </div>
                    </div>
                </div>

                <div class="header-nav navbar-collapse collapse">
                    <ul class=" nav navbar-nav">
                        <li class="active">
                        <a href="{{route('front_index')}}">الصفحة الرئيسية</a>

                        </li>

                        <li>
                            <a href="about-1.html">معلومات عنا</a>
                        </li>
                        <li>
                            <a href="services.html">خدمات</a>
                        </li>

                        <li>
                            <a href="javascript:;">المشاريع</a>

                        </li>


                        <li class="submenu-direction">
                            <a href="javascript:;">الشركات الفرعيه</a>
                                {{-- @if($company->subCompany->title) --}}
                            <ul class="sub-menu">
                                {{-- <li><a href="accordian.html">{{$company->subCompany->title}}</a></li> --}}

                            </ul>
                            {{-- @endif --}}
                        </li>

                        <li>
                            <a href="javascript:;">اتصل بنا</a>

                        </li>
                        <li>
                            <a href="/login">تسجيل الدخول
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</header>
