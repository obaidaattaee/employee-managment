@extends('site.layouts.app')
@section('content')
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
                        <form class="contact-form" method="post" action="{{ route('login') }}">
                            <input type="hidden" name="_token" value="Nwn5dNKdjhwbQ7YlR6jCqHJiGkTCM49nk1QCQmfk">                                    <div class="contact-one m-b30">
                                @csrf
                            <!-- TITLE START -->
                            <div class="section-head">
                                <div class="mt-separator-outer separator-left">
                                    <div class="mt-separator">
                                        <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary"> تسجيل  </span>الدخول </h2>
                                    </div>
                                </div>
                            </div>
                            <!-- TITLE END -->
                                <div class="row">

                                    <div class="col-md-6 form-group">
                                        <label>البريد الالكتروني </label>
                                        <input name="email" type="text" required="" class="form-control" placeholder="البريد الاكتروني ">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>كود الشركه</label>
                                    <input name="code" type="text" required="" class="form-control" placeholder="كود الشركه">
                                </div>
                                </div>

                        <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>كلمة المرور</label>
                                    <input name="password" type="password" required="" class="form-control" placeholder="كلمة المرور">
                                </div>

                            </div>



            <div class="row">
                                <div class="col-md-12 form-group">
                                    <button name="submit" type="submit" value="Submit" class="site-button btn-effect">تسجيل الدخول

                                    </button>



                            </div>

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
                                        {{-- <p>{{ auth()->user()->company->phone }}</p> --}}
                                    </div>
                                </div>

                                <div class="mt-icon-box-wraper left p-b40">
                                    <div class="icon-xs"><i class="fa fa-envelope"></i></div>
                                    <div class="icon-content">
                                        <h5 class="m-t0 font-weight-500">عنوان بريد الكتروني</h5>
                                        {{-- <p>{{ auth()->user()->company->email }}</p> --}}
                                    </div>
                                </div>

                                <div class="mt-icon-box-wraper left">
                                    <div class="icon-xs"><i class="fa fa-map-marker"></i></div>
                                    <div class="icon-content">
                                        <h5 class="m-t0 font-weight-500">معلومات العنوان</h5>
                                        {{-- <p>{{ auth()->user()->company->address }}</p> --}}
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
@endsection
