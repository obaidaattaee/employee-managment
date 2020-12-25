<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Model;

class Mmcompany extends Model
{
    protected $table='mmcompanies';

    protected $fillable = [
        'name' , 'email' , 'password' ,'address', 'logo' ,'face' , 'google' ,
        'twitter' , 'instagram' , 'phone', 'code' ,
    ];

}
