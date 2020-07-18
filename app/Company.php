<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded=['location'];

    public function jobs()
    {
        return $this->hasMany('App\Job');
    }

    public function location()
    {
        return $this->belongsTo('App\Location','location_id');
    }
}
