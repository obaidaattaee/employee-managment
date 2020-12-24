@extends('admin.layouts.app')

@section('content')

@section('content')


<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>  التقرير السنوي للشركات
                </div>
                <div class="tools">
                    <button id="print" onclick="event.preventDefault() ; print()" class="btn btn-success btn-sm">طباعة </button>
                </div>
            </div>

            <div class="portlet-body">
                <form action="">
                    <input type="number" name="year" placeholder="السنة">
                    <input type="number" name="month" placeholder="الشهر">
                    <input type="number" name="code" placeholder="كود الشركة">
                    <button type="submit" class="btn btn-sm btn-success"> ابحث</button>
                </form>
                <table class="table table-striped table-bordered table-hover" id="example">
                <thead>
                <tr>
                    <th>
                        الاسم
                    </th>
                   <th>
                        الكود
                   </th>
                   <th>
                        عدد الموظفين
                   </th>
                   <th>
                        عدد العملاء
                    </th>
                   <th>
                        ساعات العمل
                   </th>
                   <th>
                        ساعات العمل الاضافية
                   </th>
                   <th>
                        المصارف التشغيلية
                   </th>
                   <th>
                        اجمالي الرواتب
                   </th>
                   <th>
                        صافي الربح
                   </th>
                    <th>
                         التفاصيل
                    </th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                    @php
                        $work_hours = 0 ;
                        $overtime = 0 ;
                        $operating = 0 ;
                        $allsalary = 0 ;
                        foreach($company->employees as $employee){
                            $work_hours = $work_hours + $employee->reports->sum('working_hours');
                            $overtime = $overtime + $employee->reports->sum('overtime');
                            $operating = $operating + $employee->reports->sum('operating_expenses');
                            $allsalary = $allsalary + $employee->salary;
                        }
                    @endphp
                    {{-- {{dd($company->employees)}} --}}
                        <tr>
                            <td>{{$company->name}}</td>
                            <td>{{$company->code}}</td>
                            <td>{{$company->employees->count()}}</td>
                            <td>{{$company->customers->count()}}</td>

                            {{-- {{dd( $work_hours)}} --}}
                            <td>{{$work_hours}}</td>
                            <td>{{$overtime}}</td>
                            <td>{{$operating}}</td>
                            <td>{{$allsalary}}</td>
                            <td>{{$allsalary - $operating}}</td>

                            <td>
                                <a href="{{route('admin.company.employees' , ['user' => $company->id])}}" class="btn btn-success btn-sm">تفاصيل الشركة</a>
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
<script>
    function print(){
        $('#example').printThis();
    }
</script>
@endsection
