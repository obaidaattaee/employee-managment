<?php

namespace App\Models\front;

use App\User;
use Illuminate\Database\Eloquent\Model;

class EmpReport extends Model
{
    protected $table='emp_reports';

    protected $fillable = [
        'emp_id' ,'emo_id', 'phone' , 'address' ,'payment','hour','hour_plus','imageFile','notes',
    ];

    public function customer()
        {
            return $this->belongsTo(User::class,'emp_id','id');
        }
}
