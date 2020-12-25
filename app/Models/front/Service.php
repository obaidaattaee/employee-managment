<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table='services';

    protected $fillable = [
        'title' , 'summary' , 'details' ,'image',

    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

}
