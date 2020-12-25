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
                                <i class="fa fa-gift"></i> عرض الخدمة
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
                                    <div class="form-group">
{{--                                        <input type="hidden" name="PUT" value="{{method_field('PUT')}}">--}}
                                        <label>العنوان</label>
                                        <input disabled type="text" class="form-control input-lg" name="title" placeholder="أدخل العنوان" value="{{$projects->title}}">
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="form_control_1">الخدمة</label>
                                        <select disabled name="service_id" class="form-control">
                                            <option  value="">اختار الخدمة</option>
                                            @foreach($services as $service)
                                                <option
                                                    {{old('service_id',$projects->service_id)== $service->id?"selected":""}} name="service_id" value='{{$service->id}}'>{{$service->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>الخلاصة</label>
                                        <input disabled type="text" class="form-control"  name="summary" value="{{$projects->summary}}">
                                    </div>
                                    <div class="form-group">
                                        <label>التفاصيل</label>
                                        <input disabled type="text" class="form-control input-sm"  name="details" value="{{$projects->details}}">
                                    </div>
                                    <div class="form-group row">
                                        <div class='col-sm-2'>
                                            <label for="imageFile">صورة </label>
                                            <div class="custom-file">
                                                <input disabled type="file"  name="imageFile" class="custom-file-input" id="imageFile">
                                                <label class="custom-file-label" for="image">اختر ملف</label>
                                            </div>
                                            @if($projects->image)
                                                <img src='{{ asset("uploads/public//".$projects->image) }}' width='80' class='img-thumbnail mt-3' />
                                            @endif
                                        </div>

                                    </div>




                                </div>


                                <div class="form-actions right">

                                    <a class='btn default' href='{{ route("projects.index") }}'>إلغاء</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>

            </div>
        </div>

    </div>

@stop

