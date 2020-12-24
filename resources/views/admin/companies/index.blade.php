@extends('admin.layouts.app')

@section('content')

@section('content')


<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>  الشركات الفرعية
                </div>
                <div class="tools">

                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="example">
                <thead>
                <tr>
                    <th>
                        الاسم
                    </th>
                    <th>
                        العنوان
                    </th>
                   <th>
                        الكود
                   </th>

                    <th>
                         الحالة
                    </th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                    {{-- {{dd($company)}} --}}
                        <tr>
                            <td>{{$company->name}}</td>
                            <td>{{$company->address}}</td>
                            <td>{{$company->code}}</td>
                            
                            <td>
                                <a href="{{route('change.company.status' , ['user' => $company->id])}}" class="btn btn-{{$company->active == 1 ? "danger" : "success" }} btn-sm">{{ $company->active == 1 ? "تعطيل" : "تفعيل" }}</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
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
