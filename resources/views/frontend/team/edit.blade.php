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

                            <form method="POST" class="mb-2" enctype="multipart/form-data" action="{{ route('teams.update',$team->id) }}"
                                  role="form">
                                @csrf

                                <div class="form-body">
                                    <div class="form-group">
                                        <input type="hidden" name="PUT" value="{{ method_field('PUT')}}
                                        <label>الإسم</label>
                                        <input type="text" class="form-control input-lg" name="name"  value="{{old('name')??$team->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>الوظيفة</label>
                                        <input type="text" class="form-control" placeholder="" name="job" value="{{old('job')??$team->job}}">
                                    </div>

                                    <div class="form-group row">
                                        <div class='col-sm-2'>
                                            <label for="imageFile">صورة </label>
                                            <div class="custom-file">
                                                <input type="file"  name="imageFile" class="custom-file-input" id="imageFile">
                                                <label class="custom-file-label" for="image"></label>
                                            </div>
                                            @if($team->image)
                                                <img src='{{ asset("uploads/public//".$team->image) }}' width='80' class='img-thumbnail mt-3' />
                                            @endif
                                        </div>

                                    </div>




                                </div>

                                <div class="form-actions right">
                                    <button type="submit" class="btn green">تعديل</button>
                                    <a class='btn default' href='{{ route("teams.index") }}'>إلغاء</a>
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

