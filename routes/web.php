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
    return view('welcome');
});

Auth::routes();
Route::get('employee/register' , 'App\Http\Controllers\Auth\RegisterController@showUserRegisterFrom')->name('user.register');
Route::get('customer/register' , 'App\Http\Controllers\Auth\RegisterController@showCustomerRegisterFrom')->name('customer.register');
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
    Route::get('admin/companies/{company}' , 'CompanyController@index')->name('companies.index');
});

Route::prefix('company')->middleware('company' , 'auth')->namespace('App\Http\Controllers\Company')->group(function () {
    Route::get('/' , 'CompanyController@index')->name('company.index') ;
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
