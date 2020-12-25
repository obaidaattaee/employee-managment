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
                        <i class="fa fa-gift"></i> إضافة حول الشركة
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

                    <form method="post" enctype="multipart/form-data" action="{{ route('abouts.store') }}" role="form">
                            @csrf
                        <div class="form-body">

                            <div class="form-group">
                                <label>العنوان</label>
                                <input type="text" class="form-control input-lg" name="title" placeholder="أدخل العنوان" value="{{old('title')}}">
                            </div>
                            <div class="form-group">
                                <label>الخلاصة</label>
                                <input type="text" class="form-control" placeholder="" name="summary" value="{{old('summary')}}">
                            </div>
                            <div class="form-group">
                                <label>التفاصيل</label>
                                <input type="text" class="form-control input-sm" placeholder="input-sm" name="details" value="{{old('details')}}">
                            </div>
                            <div class="form-group row">
                                <div class='col-sm-2'>
                                    <label for="imageFile">صورة</label>
                                    <div class="custom-file">
                                        <input type="file" name="imageFile" class="custom-file-input" id="imageFile">

                                    </div>
                                </div>

                            </div>







                            <div class="form-actions right">
                                <button type="submit" class="btn green">إضافة </button>
                                <a class='btn default' href='{{ route("abouts.index") }}'>إلغاء</a>
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
