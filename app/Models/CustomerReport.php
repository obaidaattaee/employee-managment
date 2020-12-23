<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReport extends Model
{
    use HasFactory;
    protected $guarded = [] ;
    public function getEmployeeAttribute(){
        return $this->belongsTo(User::class , 'employee_id', 'id' );
    }
    public function getCompanyAttribute(){
        return $this->belongsTo(User::class ,'company_id', 'id'  );
    }

    public function getCustomerAttribute(){
        return $this->belongsTo(User::class ,  'customer_id' , 'id' );
    }
    public function getPercentageAttribute(){
        return self::whereMonth(
            'created_at', '=', Carbon::now()->subMonth()->month
        )->sum('overtime');
    }
}
