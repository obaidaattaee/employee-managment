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
                                    <div class="form-group">
                                        <label>الإسم</label>
                                        <input disabled type="text" class="form-control input-lg" name="name"  value="{{$missions->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>البريد الالكتروني</label>
                                        <input disabled type="email" class="form-control"  name="email" value="{{$missions->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label>هاتف</label>
                                        <input disabled type="number" class="form-control"  name="phone" value="{{$missions->phone}}">
                                    </div>
                                    <div class="form-group">
                                        <label>منطقة النص</label>
                                        <input disabled type="text" class="form-control"  name="message" value="{{$missions->message}}">
                                    </div>

                                </div>

                                <div class="form-actions right">

                                    <a class='btn default' href='{{ route("missions.index") }}'>إلغاء</a>
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

