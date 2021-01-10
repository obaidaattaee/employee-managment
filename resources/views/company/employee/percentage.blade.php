@extends('company.layouts.app')

@section('content')

{{-- {{ dd($employees) }} --}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i> عرض نسبة الموظفين
                </div>
                <div class="tools">
                    <button id="print" onclick="event.preventDefault() ; print()" class="btn btn-success btn-sm">طباعة </button>

                </div>
            </div>
            <div class="portlet-body">
                <div class="page-head">

                    <div class="col-md-6" style="padding-bottom: 10px">

                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover" id="example">
                <thead>
                <tr>
                    <th>
                         الاسم
                    </th>
                   <th>
                        الايميل
                   </th>
                   <th>
                        النسبة
                   </th>
                   <th>
                        سعر الساعة
                   </th>

                </tr>
                </thead>
                @foreach ($employees as $employee)
                    <tr>
                        <td>
                            {{ $employee->name }}
                        </td>
                        <td>
                            {{ $employee->email }}
                        </td>
                        <td>
                            {{ round($employee->salary / 30 / 8 , 2) }}
                        </td>
                        <td>
                            {{ $employee->salary / ($employee->reports->where(    'created_at', '>=', Carbon\Carbon::now()->startOfMonth()->subMonth()->toDateString() )->sum('working_hours') == 0 ?? 1) }}
                        </td>

                        {{-- <td>
                            {{ $employee->phone }}
                        </td> --}}
                        {{-- <td>
                            <a href="{{ route('company.employee.reports' , ['user' => $employee->id]) }}" class="btn btn-success">عرض الانجازات</a>
                        </td> --}}
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->

    </div>
</div>


@endsection
