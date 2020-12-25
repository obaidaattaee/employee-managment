@extends('admin.layouts.app')

@section('content')
                <!-- BEGIN PAGE HEAD -->
                <div class="page-head">

                    @include('shared.msg')
                </div>

                <div class="row">

                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i> تعديل
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
                        <div class="portlet-body form">

                            <form method="POST" class="mb-2" enctype="multipart/form-data" action="{{ route('missions.update',$mission->id) }}"
                                  role="form">
                                @csrf

                                <div class="form-body">
                                    <div class="form-group">
                                        <input type="hidden" name="PUT" value="{{ method_field('PUT')}}
                                        <label>الإسم</label>
                                        <input type="text" class="form-control input-lg" name="name"  value="{{old('name')??$mission->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>البريد الالكتروني</label>
                                        <input type="email" class="form-control"  name="email" value="{{old('email')??$mission->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label>هاتف</label>
                                        <input type="number" class="form-control"  name="phone" value="{{old('phone')??$mission->phone}}">
                                    </div>
                                    <div class="form-group">
                                        <label>منطقة النص</label>
                                        <input type="text" class="form-control"  name="message" value="{{old('message')??$mission->message}}">
                                    </div>








                                </div>

                                <div class="form-actions right">
                                    <button type="submit" class="btn green">تعديل</button>
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

