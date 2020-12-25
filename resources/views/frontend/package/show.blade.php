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
                                        <input type="text" disabled class="form-control input-lg" name="name" value="{{$packages->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>السعر</label>
                                        <input type="number" disabled class="form-control" placeholder="أدخل السعر" name="price"  value="{{$packages->price}}">
                                    </div>
                                    <div class="form-group">
                                        <label>المدة</label>
                                        <input type="text" disabled class="form-control input-sm" placeholder="أدخل المدة" name="long" value="{{$packages->long}}">
                                    </div>

                                </div>

                                <div class="form-actions right">

                                    <a class='btn default' href='{{ route("packages.index") }}'>إلغاء</a>
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

