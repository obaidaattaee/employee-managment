@extends('company.layouts.app')

@section('content')

{{-- {{ dd($employees) }} --}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i> التقارير الشهرية
                </div>
                <div class="tools">
                    <button id="print" onclick="event.preventDefault() ; print()" class="btn btn-success btn-sm">طباعة </button>

                </div>
            </div>
            <div class="portlet-body">
                <div class="page-head">
                        <div class="col-md-6" style="padding-bottom: 10px">
                            <form >
                                <select name="month" id="">
                                    @for ($i = 1 ; $i <= 12 ;$i++)
                                     <option value="{{$i}}">{{$i}}</option>

                                    @endfor
                                </select>
                                <button class="btn btn-info btn-sm" >بحث</button>
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
                        عرض الانجازات
                    </th>
                </tr>
                </thead>
                    <tbody>
                        {{-- {{ dd($reports) }} --}}

                        @foreach ($reports as $id => $user)
                            <tr>
                                <td>{{$user->first()->employee->first()->name}}</td>
                                <td>{{$user->first()->employee->first()->salary / 30 / 8}}</td>
                                <td>
                                    <a href="{{ route('company.employee.reports' , ['user' => $user->first()->employee->first()->id]) }}" class="btn btn-success btn-sm">الانجازات</a>

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
