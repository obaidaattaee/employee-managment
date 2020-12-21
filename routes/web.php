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

Route::prefix('company')->namespace('App\Http\Controllers\Company')->group(function () {
    Route::get('register' , 'CompanyRegisterController@showRegistrationForm')->name('company.register') ;
    Route::post('register' , 'CompanyRegisterController@register')->name('company.register.store') ;
    Route::get('login' , 'CompanyLoginController@showLoginForm')->name('company.login') ;
    Route::post('login' , 'CompanyLoginController@login')->name('company.login.store') ;

    Route::get('/' , 'CompanyController@index')->name('company.index') ;
});
