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

                    <form method="post" enctype="multipart/form-data" action="{{ route('missions.store') }}" role="form">
                            @csrf
                        <div class="form-body">

                            <div class="form-group">
                                <label>الإسم</label>
                                <input type="text" class="form-control input-lg" name="name" placeholder="أدخل الإسم" value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <label>البريد الالكتروني</label>
                                <input type="email" class="form-control" placeholder="أدخل البريد الالكتروني" name="email" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <label>هاتف</label>
                                <input type="number" class="form-control" placeholder="أدخل رقم الهاتف مقدمة +" name="phone" value="{{old('phone')}}">
                            </div>
                            <div class="form-group">
                                <label>منطقة النص</label>
                                <input type="text" class="form-control" placeholder="أدخل النص" name="message" value="{{old('message')}}">
                            </div>








                            <div class="form-actions right">
                                <button type="submit" class="btn green">إضافة </button>
                                <a class='btn default' href='{{ route("missions.index") }}'>إلغاء</a>
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

@stop

