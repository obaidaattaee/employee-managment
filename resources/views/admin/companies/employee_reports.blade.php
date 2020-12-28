@extends('admin.layouts.app')

@section('content')

{{-- {{ dd("adad") }} --}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i> عرض تقرير الموظف
                </div>
                <div class="tools">
                    <button id="print" onclick="event.preventDefault() ; print()" class="btn btn-success btn-sm">طباعة </button>

                </div>
            </div>
            <div class="portlet-body">
                <div class="page-head">

                    <div class="col-md-6" style="padding-bottom: 10px">
                        <form >

                            <input type="date" name="from">
                            <input type="date" name="to">
                            <input type="text" name="name">
                            <button class="btn btn-info btn-sm" >بحث</button>

                        </form>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover" id="example">
                <thead>
                <tr>
                    <th>
                         اسم الموظف
                    </th>
                   <th>
                        اسم العميل
                   </th>
                   <th>
                        العنوان
                   </th>
                   <th>
                        ساعات العمل الاضافية
                   </th>
                    <th>
                        ساعات العمل
                    </th>
                    <th>
                        التاريخ
                    </th>
                    <th>
                         النسبة
                    </th>

                    <th>
                        معاينه كاملة
                    </th>
                </tr>
                </thead>
                {{-- {{ dd($employee->reports) }} --}}
                @foreach ($reports as $report)
                {{-- {{ dd($report) }} --}}
                    <tr>
                        <td>
                            {{ $report->employee_name }}
                        </td>
                        <td>
                            {{ $report->customer->first()->name }}
                        </td>
                        <td>
                            {{ $report->work_space }}
                        </td>

                        <td>
                            {{ $report->overtime }}
                        </td>
                        <td>
                            {{ $report->working_hours }}
                        </td>
                        <td>
                            {{ $report->created_at->format('Y-m-d') }}
                        </td>
                        <td>
                            {{ round($report->employee->first()->salary / 30 / 8 , 2) * $report->working_hours + ($report->overtime * 1.5) }}
                        </td>
                        <td>
                            <a href="{{ route('admin.company.employee.reports.show' , ['user'=>$report->employee->first()->id, 'report' => $report->id ]) }}" class="btn btn-success">عرض التفاصيل</a>
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
        {{-- {{ dd($report->employee->first())  }} --}}
    </div>
</div>


@endsection


