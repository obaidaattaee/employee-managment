<?php
namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;

class CompanyController extends Controller{
    public function index () {
        return view('company.layouts.app');
    }
}
