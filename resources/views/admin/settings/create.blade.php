@extends('admin.layouts.app')

@section('content')

    <div class="row">

        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i> إضافة جديد  {{ ['slider' => 'سلايدر' , 'services'=> 'خدماتنا' , 'abouts' => 'نبذة', 'projects'=> 'مشاريعنا'][ request()['type'] ?? $setting->type ]  }}
                </div>
                <div class="tools">
                    <a href="" class="collapse" data-original-title="" title="">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                    </a>
                    <a href="" class="reload" data-original-title="" title="">
                    </a>
                    <a href="" class="remove" data-original-title="" title="">
                    </a>
                </div>
            </div>
            <div class="portlet-body form" style="display: block;">

                <form method="post" enctype="multipart/form-data" action="{{ route('company.settings.store' , ['services' => request()['type']]) }}" role="form" style="padding: 15px">
@csrf
                        <div class="form-group">
                            <label>العنوان</label>
                            <input type="text" class="form-control input-lg" name="title" placeholder="أدخل العنوان" value="{{old('title') ?? $setting->title ?? ""}}">
                        </div>

                        <div class="form-group">
                            <label>الوصف</label>
                            <input type="text" class="form-control" placeholder="" name="description" value="{{old('descriprion') ?? $setting->description ?? ""}}">
                        </div>
                        <div class="form-group">
                            <label>التفاصيل</label>
                            <input type="text" class="form-control input-sm" placeholder="input-sm" name="details" value="{{old('details') ?? $setting->details ?? ""}}">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <label for="imageFile">صورة</label>
                                <div class="custom-file">
                                    <input type="file" name="imageFile" class="custom-file-input" id="imageFile">

                                </div>
                            </div>

                        </div>







                        <div class="form-actions right">
                            <button type="submit" class="btn green">إضافة </button>
                            <a class="btn default" href="http://127.0.0.1:8000/projects">إلغاء</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
        </div>
@endsection
