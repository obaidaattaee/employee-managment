<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\EmployeeReport;
use App\Models\User;

class EmployeeController extends Controller
{
    public function index()
    {
        try {
            $employees = User::where('type', 'employee')->where('code', auth()->user()->code)->get();
            // dd($employees , auth()->user()->code) ;
            return view('company.employee.index')
                ->with('employees', $employees);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function reports($id)
    {
        try {
            $reports = EmployeeReport::where('employee_id', $id);

            $from = request()['from'];
            $to = request()['to'];
            $name = request()['name'];
            if ($from != null) {
                $reports = $reports->where('created_at', '>=', $from);
            }
            if ($to != null) {
                $reports = $reports->where('created_at', '<=', $to);
            }
            if ($name != null) {

                $reports = $reports->where('employee_name', 'like', "%$name%");
            }
            $reports = $reports->get();
            // dd($reports );
            return view('company.employee.reports')
                ->with('reports', $reports);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function show($user, $report)
    {
        $report = EmployeeReport::findOrFail($report);
        // dd($report);
        return view('company.employee.show')
            ->with('report', $report)
            ->with('user', $user);
    }
    public function percentage()
    {
        $employees = User::where('type', 'employee')->where('code', auth()->user()->code)->get();
        // dd($report);
        return view('company.employee.percentage')
            ->with('employees', $employees);
    }
    public function cahngeEmployeeSalary(User $user)
    {

        request()->validate([
            'salary' => "integer"
        ]);
        $user->salary = request()->salary;
        $user->save();
        session()->flash('msg', 's: تم تعديل الراتب ');
        return redirect()->route('company.employees');
    }
    public function create()
    {
        return view('company.employee.create');
    }
    public function store()
    {
        request()['type'] = 'employee';
        request()['code'] = auth()->user()->code;
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'type' => ['required', 'string'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'code' => ['required', 'string', 'digits:4', 'exists:users'],
        ]);
        session()->flash('msg', 's: تم اضافة الم
        وظف بنجاح');
        User::create($data);
        return redirect()->route('company.employees.qwqwqw');
    }
    public function edit(User $user){
        return view('company.employee.edit')->with('employee' , $user);
    }
    public function update(User $user){
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,id,'.$user->id],
            'phone' => ['required', 'string', 'max:255', 'unique:users,id,'.$user->id],
            'address' => ['required', 'string', 'max:255'],
        ]);
        if (isset(request()['password'])) {
            $pass_validation = request()->validate([
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        }
        $data = array_merge($data , ['password' => bcrypt($pass_validation['password'])]);
        $user->update($data);
        session()->flash('msg', 's: تم تعديل بيانات  الم
        وظف بنجاح');
        return redirect()->route('company.employees.qwqwqw');
    }
    public function delete(User $user){
        $user->delete() ;
        session()->flash('msg', 'w: تم  حذف  الم
        وظف بنجاح');
        return redirect()->route('company.employees.qwqwqw');
    }
    public function yearlyReports(){
        $companies = User::where('type' , 'employee')->where('code' , auth()->user()->code);
        $year = request()['year'] ;
        $month = request()['month'] ;
        $employees = [] ;
        // dd($companies);
        if ($year != null) {
            $companies->each(function ($company) use($year , &$employees){
            $count = $company->whereIn('id' , EmployeeReport::whereYear('created_at' , $year)
                                            ->pluck('employee_id')->toArray()
                                );
            if ($count->count() > 0) {
                $employees = array_merge($employees , [$count->first()->company->id]);
            }
            });
            $companies = $companies->whereIn('id' , $employees);
        }
        if ($month != null) {
            $companies->each(function ($company) use($month , &$employees){
                $count = $company->whereIn('id' , EmployeeReport::whereMonth('created_at' , $month)->pluck('employee_id')->toArray() );
                if ($count->count() > 0) {
                    $employees = array_merge($employees , [$count->first()->company->id]);
                }
                });
                $companies = $companies->whereIn('id' , $employees);
        }


        $companies = $companies->get();
        return view('company.employee.yearly_reports')->with('companies' , $companies);
    }
}
