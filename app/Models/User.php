<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone' ,
        'type' ,
        'address' ,
        'code',
        'title' ,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $appends = ['company' ,'companies' , 'employees' , 'customers' , 'reports' , 'percentage'] ;


    public function getCompanyAttribute(){
        return self::where('code' , $this->code)->where('type' , 'company')->first()  ;
    }
    public function getCompaniesAttribute(){
        return self::where('code' , $this->code)->where('type' , 'company')->get()  ;
    }
    public function getEmployeesAttribute($year = null , $month = null){
        $employees =  self::where('code' , $this->code)->where('type' , 'employee')  ;
        if ($year != null) {
            $employees = $employees->whereIn('id' , EmployeeReport::whereYear('created_at' , $year)->pluck('employee_id')->toArray() ) ;
        }
        if ($month != null) {
            $employees = $employees->whereIn('id' , EmployeeReport::whereMonth('created_at' , $month)->pluck('employee_id')->toArray() ) ;
        }
        return $employees->get() ;
    }
    public function getCustomersAttribute(){
        return self::where('code' , $this->code)->where('type' , 'customer')->get()  ;
    }
    public function getReportsAttribute(){
        return $this->hasMany(EmployeeReport::class , 'employee_id' , 'id');
    }

}
