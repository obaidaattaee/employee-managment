@extends('company.layouts.app')

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
                    <button id="print" onclick="event.preventDefault() ; print()" class="btn btn-success btn-sm">طباعة </button>
                    @if ( Route::current()->getName() == "company.employees")
                    @else
                    <a href="{{route('company.employee.create')}}" >
                        <button class="btn btn-info btn-sm">
                            اضافة موظف
                        </button>
                    </a>
                    @endif
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
                        نسبة الموظف
                   </th>
                   @if ( Route::current()->getName() == "company.employees")

                            @else
                            <th>
                                الايميل
                           </th>
                           <th>
                                العنوان
                           </th>
                           <th>
                                المسمى الوظيفي
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
                            @endif

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
                        @if (Route::current()->getName() == "company.employees")
                        @else
                        <td>
                            {{ $employee->email }}
                        </td>
                        <td>
                            {{ $employee->address }}
                        </td>
                        <td>
                            {{ $employee->title }}
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

                            @if ( Route::current()->getName() == "company.employees")
                            <a href="{{ route('company.employee.reports' , ['user' => $employee->id]) }}" class="btn btn-success btn-sm">الانجازات</a>

                            @else

                            @endif

                            <button class="btn btn-info btn-sm" id="button-show-form{{$employee->id}}" onclick="event.preventDefault() ; changeSalary({{$employee->id}})">تعديل الراتب </button>
                            <button class="btn btn-danger btn-sm" id="button-hidd-form{{$employee->id}}" style="display: none" onclick="event.preventDefault() ; changeForm({{$employee->id}})">الغاء  </button>
                        </td>
                        @endif
<td>
    @if ( Route::current()->getName() == "company.employees")
                            <a href="{{ route('company.employee.reports' , ['user' => $employee->id]) }}" class="btn btn-success btn-sm">الانجازات</a>

                            @else
                            <a href="{{route('company.employee.edit' , ['user' => $employee->id])}}" >
                                <button class="btn btn-primary btn-sm">
                                     تعديل
                                </button>
                            </a>
                            <a href="{{route('company.employee.delete' , ['user' => $employee->id])}}" >
                                <button class="btn btn-danger btn-sm">
                                     حذف
                                </button>
                            </a>
                            @endif
</td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->

    </div>
</div>
<script>
    function changeSalary(id){
        console.log(id);
        salary_print_element = "salary_print"+id;
        salary_form_element = "salary_form"+id;
        button_show_form = "button-show-form"+id;
        button_hidd_form = "button-hidd-form"+id;
        console.log(salary_print_element , salary_form_element);

        document.getElementById(salary_form_element).style.display = '';
        document.getElementById(salary_print_element).style.display = 'none';
        document.getElementById(button_show_form).style.display = 'none';
        document.getElementById(button_hidd_form).style.display = '';
    }
    function changeForm(id){
        console.log(id);
        salary_print_element = "salary_print"+id;
        salary_form_element = "salary_form"+id;
        console.log(salary_print_element , salary_form_element);

        document.getElementById(salary_print_element).style.display = '';
        document.getElementById(salary_form_element).style.display = 'none';
        document.getElementById("button-show-form"+id).style.display = '';
        document.getElementById("button-hidd-form"+id).style.display = 'none';
    }
</script>

@endsection
