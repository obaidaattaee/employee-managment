@extends('company.layouts.app')

@section('content')

{{-- {{ dd($employees) }} --}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i> عرض الزبائن
                </div>
                <div class="tools">
                    <button id="print" onclick="event.preventDefault() ; print()" class="btn btn-success btn-sm">طباعة </button>

                </div>
            </div>
            <div class="portlet-body">
                <div class="page-head">

                    <div class="col-md-6" style="padding-bottom: 10px">
                        <form action="">
                            <input type="text" name="name" placeholder="اسم الزبون">
                            <input type="submit" class="btn btn-success btn-sm" value="ابحث">
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
                         البريد
                    </th>
                    <th>
                         رقم الهاتف
                    </th>

                    <th>
                         التقارير
                    </th>


                </tr>
                </thead>
                @foreach ($customers as $customer)
                    <tr>
                        <td>
                            {{ $customer->name }}
                        </td>
                        <td>
                            {{ $customer->email }}
                        </td>
                        <td>
                            {{ $customer->phone }}
                        </td>

                        <td>
                            <a class="btn btn-sm btn-success" href="{{route('company.customer.reports' , ['user' => $customer->id])}}"> عرض الانجازات</a>
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
