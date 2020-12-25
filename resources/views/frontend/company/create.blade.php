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
                        <i class="fa fa-gift"></i> إضافة
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

                    <form method="post" enctype="multipart/form-data" action="{{ route('companys.store') }}" role="form">
                            @csrf
                        <div class="form-body">

                            <div class="form-group">
                                <label>الإسم</label>
                                <input type="text" class="form-control input-lg" name="name" placeholder="أدخل الإسم" value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <label>الإيميل</label>
                                <input type="email" class="form-control" placeholder="أدخل الإيميل" name="email" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <label>كلمة السر</label>
                                <input type="text" class="form-control" placeholder="أدخل كلمة السر" name="password" value="{{old('password')}}">
                            </div>
                            <div class="form-group">
                                <label>العنوان</label>
                                <input type="text" class="form-control" placeholder="أدخل العنوان" name="address" value="{{old('address')}}">
                            </div>
                            <div class="form-group row">
                                <div class='col-sm-2'>
                                    <label for="imageFile">اللوجو</label>
                                    <div class="custom-file">
                                        <input type="file" name="imageFile" class="custom-file-input" id="imageFile">

                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label>فيس بوك</label>
                                <input type="url" class="form-control" placeholder="أدخل رابط فيس بوك" name="face" value="{{old('face')}}">
                            </div>
                            <div class="form-group">
                                <label>جوجل</label>
                                <input type="url" class="form-control" placeholder="أدخل  رابط جوجل" name="google" value="{{old('google')}}">
                            </div>
                            <div class="form-group">
                                <label>تويتر</label>
                                <input type="url" class="form-control" placeholder="أدخل رابط تويتر" name="twitter" value="{{old('twitter')}}">
                            </div>
                            <div class="form-group">
                                <label>انستغرام</label>
                                <input type="url" class="form-control" placeholder="أدخل  رابط انستغرام" name="insta" value="{{old('insta')}}">
                            </div>
                            <div class="form-group">
                                <label>رقم الهاتف</label>
                                <input type="text" class="form-control" placeholder="أدخل رقم الهاتف" name="phone" value="{{old('phone')}}">
                            </div>
                            <div class="form-group">
                                <label>الكود</label>
                                <input type="text" class="form-control" placeholder="أدخل الكود" name="code" value="{{old('code')}}">
                            </div>









                            <div class="form-actions right">
                                <button type="submit" class="btn green">إضافة </button>
                                <a class='btn default' href='{{ route("companys.index") }}'>إلغاء</a>
                            </div>

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
