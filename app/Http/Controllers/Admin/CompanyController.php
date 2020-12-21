<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;

class CompanyController extends Controller{
    public function index() {
        $companies = Company::get() ;
        return view('admin.companies.index')
                ->with('companies' , $companies);
    }
}
