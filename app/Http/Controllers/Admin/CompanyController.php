<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\EmployeeReport;
use App\Models\User;

class CompanyController extends Controller{
    public function index() {
        $companies = User::where('type' , 'company')->get() ;
        // dd($companies);
        return view('admin.companies.index')
                ->with('companies' , $companies);
    }
    public function changeCompanyStatus(User $user){
        $user->active = !$user->active ;
        $user->save() ;
        $user->active == 1 ?    session()->flash('msg' , 's: تم تفعيل الشركة بنجاح') :
                                session()->flash('msg' , 'w: تم تعطيل الشركة بنجاح') ;
        return redirect(route('admin.companies.index'));
    }
    public function yearlyReports(){
        $companies = User::where('type' , 'company');
        $year = request()['year'] ;
        $month = request()['month'] ;
        $code = request()['code'] ;
        $employees = [] ;
        // dd($companies);
        if ($year != null) {
            $companies->each(function ($company) use($year , &$employees){
            $count = $company->employees
                        ->whereIn('id' , EmployeeReport::whereYear('created_at' , $year)
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
                $count = $company->employees->whereIn('id' , EmployeeReport::whereMonth('created_at' , $month)->pluck('employee_id')->toArray() );
                if ($count->count() > 0) {
                    $employees = array_merge($employees , [$count->first()->company->id]);
                }
                });
                $companies = $companies->whereIn('id' , $employees);
        }

        if ($code != null) {
            $companies = $companies->where('code' , $code);
        }
        $companies = $companies->get();
        return view('admin.companies.yearly_reports')->with('companies' , $companies);
    }
    public function profit(){
        $companies = User::where('type' , 'company')->get() ;
        // dd($companies);
        return view('admin.companies.data')
                ->with('companies' , $companies);
    }
}
