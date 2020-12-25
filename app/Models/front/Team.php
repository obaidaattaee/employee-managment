<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table='teams';

    protected $fillable = [
        'name' , 'job' ,'image',

    ];
}
