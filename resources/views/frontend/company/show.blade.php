@extends('admin.layouts.app')
@section('content')
                <!-- BEGIN PAGE HEAD -->
                <div class="page-head">

                </div>

                <div class="row">

                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i> عرض
                            </div>
                            <div class="tools">
                                <a href="" class="collapse">
                                </a>
                                <a href="#portlet-config" data-toggle="modal" class="config">
                                </a>
                                <a href="" class="reload">
                                </a>
                                <a href="" class="remove">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body ">

                            <form   role="form">

                                <div class="form-body">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <input type="hidden" name="PUT" value="{{ method_field('PUT')}}">
                                            <label>الإسم</label>
                                            <input type="text" disabled class="form-control input-lg" name="name"  value="{{$companys->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label>الإيميل</label>
                                            <input type="email" disabled class="form-control" placeholder="أدخل الإيميل" name="email" value="{{$companys->email}}">
                                        </div>
                                        <div class="form-group">
                                            <label>كلمة السر</label>
                                            <input type="text" disabled class="form-control" placeholder="أدخل كلمة السر" name="password" value="{{$companys->password}}">
                                        </div>
                                        <div class="form-group">
                                            <label>العنوان</label>
                                            <input type="text" disabled class="form-control" placeholder="أدخل العنوان" name="address" value="{{$companys->address}}">
                                        </div>
                                        <div class="form-group row">
                                            <div class='col-sm-2'>
                                                <label for="imageFile">لوجو </label>
                                                <div class="custom-file">
                                                    <input type="file" disabled  name="imageFile" class="custom-file-input" id="imageFile">
                                                    <label class="custom-file-label" for="image">اختر ملف</label>
                                                </div>
                                                @if($companys->logo)
                                                    <img src='{{ asset("uploads/public/".$companys->logo) }}' width='80' class='img-thumbnail mt-3' />
                                                @endif
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label>فيس بوك</label>
                                            <input type="url" disabled class="form-control" placeholder="أدخل رابط فيس بوك" name="face" value="{{$companys->face}}">
                                        </div>
                                        <div class="form-group">
                                            <label>جوجل</label>
                                            <input type="url" disabled class="form-control" placeholder="أدخل  رابط جوجل" name="google" value="{{$companys->google}}">
                                        </div>
                                        <div class="form-group">
                                            <label>تويتر</label>
                                            <input type="url" disabled class="form-control" placeholder="أدخل رابط تويتر" name="twitter" value="{{$companys->twitter}}">
                                        </div>
                                        <div class="form-group">
                                            <label>انستغرام</label>
                                            <input type="url" disabled class="form-control" placeholder="أدخل  رابط انستغرام" name="insta" value="{{$companys->insta}}">
                                        </div>
                                        <div class="form-group">
                                            <label>رقم الهاتف</label>
                                            <input type="text" disabled class="form-control" placeholder="أدخل رقم الهاتف" name="phone" value="{{$companys->phone}}">
                                        </div>
                                        <div class="form-group">
                                            <label>الكود</label>
                                            <input type="text"  disabled class="form-control" placeholder="أدخل الكود" name="code" value="{{$companys->code}}">
                                        </div>




                                    </div>

                                <div class="form-actions right">

                                    <a class='btn default' href='{{ route("companys.index") }}'>إلغاء</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>

            </div>
        </div>

    </div>


    @endsection
