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
                        <h2 class="m-b0">نموزج الانجاز اليومي للزبون !</h2>
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


                            <!-- TITLE START -->
                            <div class="section-head">
                                <div class="mt-separator-outer separator-left">
                                    <div class="mt-separator">
                                        <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary"> تقرير  </span>  العميل </h2>
                                    </div>
                                </div>
                            </div>
                            @include('shared.msg')
                            <!-- TITLE END -->
                        <form class="contact-form" enctype="multipart/form-data" method="post" action="{{ route('site.customer.report') }}">
                            @csrf
                            <div class="contact-one m-b30">

                                <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>اسم العميل</label>
                                    <input type="text"  class="form-control"  value="{{auth()->user()->name}}" disabled required>
                                    <input  name="customer_name" type="hidden" value="{{auth()->user()->name}}"  class="form-control"  required>
                                </div>

                                    <div class="col-md-6 form-group">
                                        <label for="emo_id" class="caption-subject bold uppercase">اسم الموظف</label>
                                        <select name="employee_id" class="form-control">
                                            <option value=''>اسم الموظف</option>
                                            @foreach(auth()->user()->employees as $emo)
                                                <option class="form-control select2 "
                                                        {{old('customer_id')== $emo->id?"selected":""}} value='{{$emo->id}}'>{{$emo->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- <label>اسم العميل  </label>
                                    <input name="emo_id" type="text" required class="form-control" placeholder="اسم العامل">
                                </div> --}}

                                <div class="col-md-6 form-group">
                                    <label>رقم الجوال</label>
                                    <input name="phone" type="text" required class="form-control" placeholder="رقم الجوال">
                                </div>

                                {{-- <div class="col-md-6 form-group">
                                    <label for="emo_id" class="caption-subject bold uppercase">مكان العمل </label>
                                    <select name="company_id" class="form-control">
                                        <option value=''>مكان العمل </option>
                                        @foreach(auth()->user()->companies as $emo)
                                            <option class="form-control select2 "
                                                    {{old('company_id')== $emo->id?"selected":""}} value='{{$emo->id}}'>{{$emo->address}}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div class="col-md-6 form-group">
                                    <label>مكان العمل </label>
                                    <input name="work_space" type="text" required class="form-control" placeholder="مكان العمل ">
                                </div>


                                <div class="col-md-6 form-group">
                                    <label>التقييم</label>
                                    <input name="evaluation" type="text" required class="form-control" placeholder="التقييم">
                                </div>

                                    <div class="col-md-6 form-group">
                                    <label> ملاحظات </label>
                                    <textarea name="notes" rows="4" class="form-control " required placeholder="ملاحظات"></textarea>
                                </div>


                                <div class="col-md-6 form-group custom-file">
                                    {{-- <div class=""> --}}
                                        <label class="custom-file-label" for="images"> الصور</label>
                                        <input type="file" name="imageFile[]" class="custom-file-input" multiple id="images">
                                    {{-- </div> --}}
                                </div>

                            </div>
                            {{-- {{dd('request::class')}}; --}}

                                <div class="text-right">
                                    <button type="submit" value="Submit" class="site-button btn-effect">إرسال

                                    </button>
                                </div>
                        </form>

                            </div>

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
