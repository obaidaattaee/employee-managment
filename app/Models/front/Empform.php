<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Model;

class Empform extends Model
{
    protected $table='empforms';

    protected $fillable = [
        'user_id' , 'address' , 'paument' ,'work_hours','add_work_hours','image',

    ];
}
