<?php
namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\EmployeeReport;
use App\Models\User;

class EmployeeController extends Controller{
    public function index(){
        try {
            $employees = User::where('type' , 'employee')->where('code' , auth()->user()->code)->get();
            // dd($employees , auth()->user()->code) ;
            return view('company.employee.index')
                    ->with('employees' , $employees) ;
        } catch (\Throwable $th) {
            dd($th);
        }

    }
    public function reports($id){
        try {
            $reports = EmployeeReport::where('employee_id' , $id) ;

            $from = request()['from'] ;
            $to = request()['to'] ;
            $name = request()['name'];
            if ($from != null) {
                $reports = $reports->where('created_at' , '>=' , $from) ;
            }
            if ($to != null) {
                $reports = $reports->where('created_at' , '<=' , $to);
            }
            if($name != null){

                $reports = $reports->where('employee_name'  , 'like' , "%$name%");
            }
            $reports = $reports->get() ;
            // dd($reports );
            return view('company.employee.reports')
                    ->with('reports' , $reports);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function show($user , $report){
        $report = EmployeeReport::findOrFail($report);
        // dd($report);
        return view('company.employee.show')
                ->with('report' , $report);
    }
    public function percentage(){
        $employees = User::where('type' , 'employee')->where('code' , auth()->user()->code)->get();
        // dd($report);
        return view('company.employee.percentage')
                ->with('employees' , $employees);
    }
    public function cahngeEmployeeSalary(User $user){

        request()->validate([
            'salary' => "integer"
        ]);
        $user->salary = request()->salary ;
        $user->save() ;
        session()->flash('msg' , 's: تم تعديل الراتب ');
        return redirect ()->route('company.employees');

    }
}
