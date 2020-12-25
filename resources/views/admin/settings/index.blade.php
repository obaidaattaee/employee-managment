@extends('admin.layouts.app')

@section('content')

@section('content')


<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>اعدادات عامة للموقع \ اعدادات الخدمات
                </div>
                <div class="tools">

                </div>
            </div>
            <div class="portlet-body">
                <div class="page-head">

                    <div class="col-md-6" style="padding-bottom: 10px">
                        <a  class="btn btn-sm green" href="{{route('company.settings.create' , ['services' => request()['type'] , 'type' => request()['type'] ])}}"> <i class="fa fa-search">    </i> اضافة خدمة جديدة </a>

                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover" id="example">
                <thead>
                <tr>
                    <th>
                         العنوان
                    </th>
                   <th>
                        الوصف
                   </th>
                   <th>
                        التفاصيل 
                   </th>
                   <th>
                        الكود
                   </th>
                   <th>
                        رقم الهاتف
                   </th>
                   <th>
                        الكود
                   </th>
                    <th>
                         عرض الموظفين
                    </th>
                </tr>
                </thead>
                    @foreach ($settings as $setting)
                    {{-- {{ dd($role['permissions']) }} --}}
                        <tr>
                            <td>{{ $setting->title }}</td>
                            <td>
                                {{ $setting->description }}
                            </td>
                            <td>
                                {{ $setting->details }}
                            </td>
                            <td>
                                <img src="{{asset('uploads/settings/'. $setting->image )}}" alt="" style="max-width: 100px; max-height: 200px">
                            </td>
                            <td>
                                <a href="{{ route('company.settings.delete' , ['services' => $setting->id ]) }}" class="btn btn-danger">حذف</a>
                                <a href="{{ route('company.settings.edit' , ['services' => $setting->id ]) }}" class="btn btn-info">تعديل</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->

    </div>
</div>


@endsection
@section('js')

<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

@endsection
