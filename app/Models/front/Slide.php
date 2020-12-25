<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table='slides';

    protected $fillable = [
        'title' , 'summary' , 'details' ,'image',

    ];
}
