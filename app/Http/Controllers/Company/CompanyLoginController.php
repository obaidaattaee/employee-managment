<?php
namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;

class CompanyLoginController extends Controller{
    public function showLoginForm (){
        return view('auth.company_login');
    }
    public function login(){
        $data = request()->validate([
            'code' => ['required' , 'digits:4' , 'exists:companies'] ,
            'password' => ['required' ] ,
        ]);
        $company = Company::where('code' , request()->code)->first() ;

        if ($company->password === bcrypt($data['password'])) {
            return view();
        }
        dd('hello');
    }
}
