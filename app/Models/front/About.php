<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table='abouts';

    protected $fillable = [
        'title' , 'summary' , 'details' ,'image',

    ];
}
