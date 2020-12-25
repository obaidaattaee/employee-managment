<?php
namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\CustomerReport;
use App\Models\EmployeeReport;
use App\Models\User;

class CustomerController extends Controller{
    public function index(){
        try {
            $customers = User::where('type' , 'customer')->where('code' , auth()->user()->code);
            // dd($customers , auth()->user()->code) ;
            $name =request()['name'];
            if ($name != null) {
                $customers = $customers->where('name' , 'like' , "%$name%");
            }
            $customers = $customers->get() ;
            return view('company.customers.index')
                    ->with('customers' , $customers) ;
        } catch (\Throwable $th) {
            dd($th);
        }

    }
    public function reports($id){
        try {
            $reports = CustomerReport::where('customer_id' , $id) ;

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

                $reports = $reports->where('customer_name'  , 'like' , "%$name%");
            }
            $reports = $reports->get() ;
            // dd($reports );
            return view('company.customers.reports')
                    ->with('reports' , $reports);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function show($user , $report){
        $report = CustomerReport::findOrFail($report);
        // dd($report);
        return view('company.customers.show')
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
