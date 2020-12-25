<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $table='missions';

    protected $fillable = [
        'name' , 'email' , 'phone' ,'message',

    ];
}
