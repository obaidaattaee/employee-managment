@extends('company.layouts.app')
@section('content')
<div class="row margin-top-10">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2">
            <a href="{{route('company.employees')}}">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-sharp">{{$employees}}</h3>
                        <small>الموظفين</small>
                    </div>
                    <div class="icon">
                        <i class="icon-pie-chart"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2">
            <a href="{{route('company.employees')}}">
                <div class="display">
                    <div class="number">
                        <h3 class="font-red-haze">{{ $employees_reports }}</h3>
                        <small>تقارير الموظفين</small>
                    </div>
                    <div class="icon">
                        <i class="icon-like"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2">
            <a href="{{route('company.customers')}}">
                <div class="display">
                    <div class="number">
                        <h3 class="font-blue-sharp">{{ $customers }}</h3>
                        <small>العملاء</small>
                    </div>
                    <div class="icon">
                        <i class="icon-basket"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2">
            <a href="{{ route('company.customers') }}">
                <div class="display">
                    <div class="number">
                        <h3 class="font-purple-soft">{{ $customers_reports }}</h3>
                        <small>تقارير العملاء</small>
                    </div>
                    <div class="icon">
                        <i class="icon-user"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<div>
    <div class="row margin-top-10" style="background-color: white; padding-right: 10px">

                <h1>
                    كود الشركة :
                    {{ auth()->user()->code  }}
                </h1>
                <h1>
                    هاتف الشركة :
                    {{ $main_company->phone }}
                </h1>
                <h1>
                    بريد الشركة :
                    {{ $main_company->email }}
                </h1>
                <h1>
                    عنوان الشركة  :
                    {{ $main_company->address  }}
                </h1>

    </div>
</div>
@endsection
