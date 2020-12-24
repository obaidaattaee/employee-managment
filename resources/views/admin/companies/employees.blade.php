@extends('admin.layouts.app')

@section('content')

{{-- {{ dd($employees) }} --}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i> عرض الموظفين
                </div>
                <div class="tools">

                </div>
            </div>
            <div class="portlet-body">
                <div class="page-head">

                    <div class="col-md-6" style="padding-bottom: 10px">
                        <form action="">
                            <input type="number" name="year" placeholder="السنة">
                            <input type="number" name="month" placeholder="الشهر">
                            <button type="submit" class="btn btn-sm btn-success"> ابحث</button>
                        </form>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover" id="myTable">
                <thead>
                <tr>
                    <th>
                         الاسم
                    </th>
                    <th>
                        نسبة الموظف
                   </th>

                    <th>
                        الايميل
                    </th>
                    <th>
                        العنوان
                    </th>
                    <th>
                        رقم الهاتف
                    </th>
                    <th>
                        الراتب
                    </th>

                    <th>
                        ساعات العمل
                    </th>
                    <th>
                        الساعات الاضافية
                    </th>


                    <th>
                        عرض الانجازات
                    </th>
                </tr>
                </thead>
                @foreach ($employees as $employee)
                    <tr>
                        <td>
                            {{ $employee->name }}
                        </td>
                        <td>
                            {{ round($employee->salary / 30 / 8 , 2) }}
                        </td>
                        <td>
                            {{ $employee->email }}
                        </td>
                        <td>
                            {{ $employee->address }}
                        </td>
                        <td>
                            {{ $employee->phone }}
                        </td>
                        <td>
                            <div id="salary_print{{$employee->id}}">
                                {{ $employee->salary }}
                            </div>
                            <div id="salary_form{{$employee->id}}" style="display: none">
                                <form action="{{route('cahnge.employee.salary' , ['user' => $employee->id])}}" method="post">
                                    @csrf
                                    <input type="text" style="max-width: 60px" name="salary" value="{{$employee->salary}}">
                                    <input type="submit" class="btn btn-success" value="تعديل">
                                </form>
                            </div>
                        </td>
                        <td>
                            {{ $employee->reports->where(    'created_at', '>=', Carbon\Carbon::now()->startOfMonth()->subMonth()->toDateString() )->sum('working_hours') }}
                        </td>
                        <td>
                            {{ $employee->reports->where(    'created_at', '>=', Carbon\Carbon::now()->startOfMonth()->subMonth()->toDateString() )->sum('overtime') }}
                        </td>
                        <td>
                            <a href="{{ route('admin.company.employee.reports' , ['user' => $employee->id]) }}" class="btn btn-success btn-sm">الانجازات</a>
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
