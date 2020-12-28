<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('home'));
});

Auth::routes();
Route::get('employee/register' , 'App\Http\Controllers\Auth\RegisterController@showUserRegisterFrom')->name('user.register');
Route::get('customer/register' , 'App\Http\Controllers\Auth\RegisterController@showCustomerRegisterFrom')->name('customer.register');
Route::get('person/login' , 'App\Http\Controllers\Auth\RegisterController@showCustomerLoginFrom')->name('person.login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth' , 'super_admin' ])->namespace('\App\Http\Controllers\Admin')->group(function () {
    Route::get('/' , 'AdminController@index')->name('admin');
    Route::get('company/settings/services' , 'SettingsController@services')->name('company.settings.index');
    Route::get('company/settings/create/{services}' , 'SettingsController@create')->name('company.settings.create');
    Route::post('company/settings/create/{services}' , 'SettingsController@store')->name('company.settings.store');
    Route::get('company/settings/delete/{services}' , 'SettingsController@delete')->name('company.settings.delete');
    Route::get('company/settings/edit/{services}' , 'SettingsController@edit')->name('company.settings.edit');
    Route::post('company/settings/update/{id}/{services}' , 'SettingsController@update')->name('company.settings.update');

    Route::get('admin/companies/index' , 'CompanyController@index')->name('admin.companies.index');
    Route::get('admin/companies/profit' , 'CompanyController@profit')->name('admin.companies.profit');
    Route::get('admin/companies/{user}/cangeStatus' , 'CompanyController@changeCompanyStatus')->name('change.company.status');
    Route::get('admin/companies/{company}' , 'CompanyController@index')->name('companies.index');

    Route::get('admin/companies/yearly/reports' , 'CompanyController@yearlyReports')->name('admin.companies.yearly.reports');
    Route::get('company/{user}/employees' , 'EmployeeController@index')->name('admin.company.employees') ;
    Route::get('/employee/{user}/report' , 'EmployeeController@reports')->name('admin.company.employee.reports') ;
    Route::get('/employee/{user}/report/{report}/show' , 'EmployeeController@show')->name('admin.company.employee.reports.show') ;






Route::namespace('front')->group(function () {



        Route::get("/slide",'SlideController@index')->name('slide');
        Route::get("/slide/create","SlideController@create")->name('slides.create');
        Route::post("/slide/create","SlideController@store")->name('slides.store');
        Route::post("/slide","SlideController@show")->name('slides.show');
        //    Route::get("/slide/destroy/{id}","SlideController@destroy")->name('slides.destroy');
        Route::resource('slides','SlideController');

        //edit view
        Route::get("/slide/edit/{id}","SlideController@edit")->name('slides.edit');
        //update data
        Route::post("/slide/update/{id}","SlideController@update")->name('slides.update');

        Route::resource('services','ServiceController');
        Route::get("/service/edit/{id}","ServiceController@edit")->name('services.edit');
        //update data
        Route::post("/service/update/{id}","ServiceController@update")->name('services.update');
        //about
        Route::resource('abouts','AboutController');
        Route::get("/about/edit/{id}","AboutController@edit")->name('abouts.edit');
        //update data
        Route::post("/about/update/{id}","AboutController@update")->name('abouts.update');
        //team
        Route::resource('teams','TeamController');
        Route::get("/teams/edit/{id}","TeamController@edit")->name('teams.edit');
        //update data
        Route::post("/teams/update/{id}","TeamController@update")->name('teams.update');
        //project
        Route::resource('projects','ProjectController');
        Route::get("/project/edit/{id}","ProjectController@edit")->name('projects.edit');
        //update data
        Route::post("/project/update/{id}","ProjectController@update")->name('projects.update');
        //Package
        Route::resource('packages','PackageController');
        Route::get("/package/edit/{id}","PackageController@edit")->name('packages.edit');
        //update data
        Route::post("/package/update/{id}","PackageController@update")->name('packages.update');

        //Package
        Route::resource('missions','MissionController');
        Route::get("/mission/edit/{id}","MissionController@edit")->name('missions.edit');
        //update data
        Route::post("/mission/update/{id}","MissionController@update")->name('missions.update');
        //mmcompany
        Route::resource('companys','MmcompanyController');
        Route::get("/company/edit/{id}","MmcompanyController@edit")->name('companys.edit');
        //update data
        Route::post("/company/update/{id}","MmcompanyController@update")->name('companys.update');

});
});

Route::prefix('company')->middleware('company' , 'auth')->namespace('App\Http\Controllers\Company')->group(function () {
    Route::get('/' , 'CompanyController@index')->name('company.index') ;
    Route::middleware('company_verified')->group(function () {
        Route::get('/employees' , 'EmployeeController@index')->name('company.employees') ;
        Route::get('/employees/q' , 'EmployeeController@index')->name('company.employees.qwqwqw') ;
        Route::get('/employee/{user}/report' , 'EmployeeController@reports')->name('company.employee.reports') ;
        Route::get('/employee/{user}/report/{report}/show' , 'EmployeeController@show')->name('company.employee.reports.show') ;
        Route::get('/employee/percentage/' , 'EmployeeController@percentage')->name('company.employees.percentage') ;
        Route::post('/employee/{user}/cahnge/salary' , 'EmployeeController@cahngeEmployeeSalary')->name('cahnge.employee.salary') ;

        Route::get('/cusromer' , 'CustomerController@index')->name('company.customers') ;
        Route::get('/customer/{user}/report' , 'CustomerController@reports')->name('company.customer.reports') ;
        Route::get('/customer/{user}/report/{report}/show' , 'CustomerController@show')->name('company.customer.reports.show') ;

        Route::get('/monthly/reports' , 'CompanyController@monthlyReplorts')->name('company.monthly.reports') ;

    });

});

Route::prefix('site')->namespace('App\Http\Controllers\User')->group(function(){

    Route::middleware('auth')->group(function () {
        Route::get('/customer/report' , 'SiteController@index')->name('site.index') ;
        Route::middleware('employee')->group(function () {
            Route::get('/employee/report' , 'SiteController@employeeReport')->name('site.index') ;
            Route::post('/employee/report' , 'SiteController@employeeReportStore')->name('site.employee.report') ;
            });
        Route::middleware('customer')->group(function (){
            Route::get('/customer/report' , 'SiteController@cutomerReport')->name('site.customer.index') ;
            Route::post('/customer/report' , 'SiteController@cutomerReportStotre')->name('site.customer.report') ;

        });

        Route::get('/' , 'UserController@index')->name('user.index') ;
    });
});


Route::get('test' , function (){
    return view('site.login');
} );
