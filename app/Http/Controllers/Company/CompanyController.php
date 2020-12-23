<?php
namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\EmployeeReport;

class CompanyController extends Controller{
    public function index () {
        return view('company.showcode');
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
