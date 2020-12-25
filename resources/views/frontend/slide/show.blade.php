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
                                <i class="fa fa-gift"></i> عرض السلايد
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
                                        <label>العنوان</label>
                                        <input type="text" class="form-control input-lg" placeholder="أدخل العنوان" value="{{$slides->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label>الخلاصة</label>
                                        <input type="text" class="form-control" placeholder="" value="{{$slides->summary}}">
                                    </div>
                                    <div class="form-group">
                                        <label>التفاصيل</label>
                                        <input type="text" class="form-control input-sm" placeholder="input-sm" value="{{$slides->details}}">
                                    </div>
                                    <div class="form-group row">
                                        <div class='col-sm-6'>
                                            <label for="imageFile">صورة </label>
                                            <div class="custom-file">
                                                <input type="file" disabled name="imageFile" class="custom-file-input" id="imageFile">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                            @if($slides->image)
                                                <img src="{{ asset('uploads/public/'.$slides->image) }}" style="max-height: 100px;max-width: 200px;" alt="">
                                            @endif
                                        </div>
                                    </div>




                                </div>

                                <div class="form-actions right">

                                    <a class='btn default' href='{{ route("slide") }}'>إلغاء</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>

                @endsection
