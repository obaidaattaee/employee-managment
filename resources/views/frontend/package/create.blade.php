@extends('admin.layouts.app')

@section('content')
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
{{--                @foreach($errors->any())--}}
{{--<div class="alert alert-danger">--}}
{{--    asddasdads--}}
{{--</div>      --}}
                @include('shared.msg')

            </div>

			<div class="row">

			<!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i> إضافة لنا تسعير
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

                    <form method="post" enctype="multipart/form-data" action="{{ route('packages.store') }}" role="form">

                            @csrf
                        <div class="form-body">

                            <div class="form-group">
                                <label>الإسم</label>
                                <input type="text" class="form-control input-lg" name="name" placeholder="أدخل الإسم" value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <label>السعر</label>
                                <input type="number" class="form-control" placeholder="أدخل السعر" name="price" placeholder="أدخل السعر" value="{{old('price')}}">
                            </div>
                            <div class="form-group">
                                <label>المدة</label>
                                <input type="text" class="form-control input-sm" placeholder="أدخل المدة" placeholder="أدخل المدة" name="long" value="{{old('long')}}">
                            </div>

                            <div class="form-group">
                                <label>الخاصية</label>
                                <input type="text" class="form-control input-lg" name="prop" placeholder="مثال : ss,ddd,ff " value="{{old('prop')}}">
                            </div>






                            <div class="form-actions right">
                                <button type="submit" class="btn green">إضافة </button>
                                <a class='btn default' href='{{ route("packages.index") }}'>إلغاء</a>
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

