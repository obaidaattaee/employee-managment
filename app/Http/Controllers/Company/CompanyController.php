<?php
namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\CustomerReport;
use App\Models\EmployeeReport;
use App\Models\User;

class CompanyController extends Controller{
    public function index () {
        $employees = User::where('code' , auth()->user()->code)->where('type' , 'employee')->count() ;
        $employees_ids = User::where('code' , auth()->user()->code)->where('type' , 'employee')->pluck('id')->toArray() ;
        $customers = User::where('code' , auth()->user()->code)->where('type' , 'customer')->count() ;
        $main_company = User::where('type' , 'super_admin')->first() ;
        $customers_ids = User::where('code' , auth()->user()->code)->where('type' , 'customer')->pluck('id')->toArray() ;
        $employees_reports = EmployeeReport::whereIn('employee_id' , $employees_ids )->count();
        $customers_reports = CustomerReport::whereIn('customer_id' , $customers_ids )->count();
        return view('company.showcode')
                ->with('employees' , $employees)
                ->with('employees_reports' , $employees_reports)
                ->with('customers_reports' , $customers_reports)
                ->with('main_company' , $main_company)
                ->with('customers' , $customers);
    }
    public function monthlyReplorts(){
        try {
            $month = request()['month'];
                $reports = EmployeeReport::query() ;
                if ($month != null){
                    $reports = $reports->whereMonth('created_at' , $month);
                }
                $reports = $reports->get()->groupBy('employee_id') ;
                return view('company.employee.month_reports')
                        ->with('reports' , $reports);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
