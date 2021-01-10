@extends('company.layouts.app')

@section('content')

{{-- {{ dd("adad") }} --}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i> عرض تقرير الزبون
                </div>
                <div class="tools">
                    <button id="print" onclick="event.preventDefault() ; print()" class="btn btn-success btn-sm">طباعة </button>
                    <a href="{{route('company.customers')}}" >
                        <button class="btn btn-info btn-sm">
                            رجوع
                        </button>
                    </a>
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
                         اسم العميل
                    </th>
                   <th>
                        اسم الموظف
                   </th>
                   <th>
                        مكان العمل
                    </th>
                   <th>
                        رقم الهاتف
                   </th>
                    <th>
                       التقييم
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
                        <td>{{$report->customer_name}}</td>
                        <td>{{$report->employee->first()->name}}</td>
                        <td>{{$report->work_space}}</td>
                        <td>{{$report->phone}}</td>
                        <td>{{$report->evaluation}}</td>
                        <td><a href="{{route('company.customer.reports.show' , [
                            'user' => $report->customer_id , 'report' => $report->id
                        ])}}" class="btn btn-success btn-sm">معاينة</a></td>
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
