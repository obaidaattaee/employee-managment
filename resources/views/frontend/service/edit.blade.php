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
                                <i class="fa fa-gift"></i> تعديل خدمة
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

                            <form method="POST" class="mb-2" enctype="multipart/form-data" action="{{ route('services.update',$service->id) }}"
                                  role="form">
                                @csrf

                                <div class="form-body">
                                    <div class="form-group">
                                        <input type="hidden" name="PUT" value="{{ method_field('PUT') }}
                                        <label>العنوان</label>
                                        <input type="text" class="form-control input-lg" name="title" placeholder="أدخل العنوان" value="{{old('title')??$service->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label>الخلاصة</label>
                                        <input type="text" class="form-control" placeholder="" name="summary" value="{{old('summary')??$service->summary}}">
                                    </div>
                                    <div class="form-group">
                                        <label>التفاصيل</label>
                                        <input type="text" class="form-control input-sm" placeholder="input-sm" name="details" value="{{old('details')??$service->details}}">
                                    </div>
                                    <div class="form-group row">
                                        <div class='col-sm-2'>
                                            <label for="imageFile">صورة </label>
                                            <div class="custom-file">
                                                <input type="file"  name="imageFile" class="custom-file-input" id="imageFile">
                                                <label class="custom-file-label" for="image"></label>
                                            </div>
                                            @if($service->image)
                                                <img src='{{ asset("uploads/public/".$service->image) }}' width='80' class='img-thumbnail mt-3' />
                                            @endif
                                        </div>

                                    </div>




                                </div>

                                <div class="form-actions right">
                                    <button type="submit" class="btn green">تعديل</button>
                                    <a class='btn default' href='{{ route("services.index") }}'>إلغاء</a>
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
