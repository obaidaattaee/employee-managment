<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table='projects';

    protected $fillable = [
        'service_id','title' , 'summary' , 'details' ,'image',

    ];


    public function service()
    {
        return $this->belongsTo(Service::class,'service_id','id');
    }

}
