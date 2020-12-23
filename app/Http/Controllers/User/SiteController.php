<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CustomerReport;
use App\Models\EmployeeReport;

class SiteController extends Controller{
    public function index(){
        return view('site.home');
    }
    public function employeeReport(){
        return view('site.employee_reports') ;
    }
    public function employeeReportStore(){

            $data = request()->validate([
                'phone' => ['required' , 'integer' ] ,
                'customer_id' => ['required' ] ,
                'employee_name' => ['required' ] ,
                'company_id' => ['required' ] ,
                'operating_expenses' => ['required'] ,
                'working_hours' => ['required' , 'integer'] ,
                'overtime' => ['required' , 'integer'] ,
                'notes' => ['required'] ,
            ]);
            $data['images'] = [] ;


            if (!empty(request()->imageFile)) {
                foreach(request()->imageFile as $key => $image){
                    $image_name = basename($image->store('employee_reports' , 'public'));

                    $data['images'][$key] = $image_name;
                }
            }
            $data['images'] = json_encode($data['images']) ;
            $data['employee_id'] = auth()->id() ;

            EmployeeReport::create($data) ;
            session()->flash('msg' , 's: تم اضافة  التقرير بنجاح') ;
            return redirect (route('site.index')) ;

    }
    public function cutomerReport(){

        return view('site.customer_reports');
    }
    public function cutomerReportStotre (){
        try {
            $data = request()->validate([
                'phone' => ['required' , 'integer' ] ,
                'employee_id' => ['required' ] ,
                'customer_name' => ['required' ] ,
                'work_space' => ['required' ] ,
                'evaluation' => ['required'] ,
                'notes' => ['required'] ,
            ]);
            $data['images'] = [] ;


            if (!empty(request()->imageFile)) {
                foreach(request()->imageFile as $key => $image){
                    $image_name = basename($image->store('customer_reports' , 'public'));
                    $data['images'][$key] = $image_name;
                }
            }
            $data['images'] = json_encode($data['images']) ;
            $data['customer_id'] = auth()->id() ;

            CustomerReport::create($data) ;
            session()->flash('msg' , 's: تم اضافة  التقرير بنجاح') ;
            return redirect (route('site.customer.index')) ;
        } catch (\Throwable $th) {
            dd($th);
        }

    }
}
