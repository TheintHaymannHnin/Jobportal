<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded=[];

    public function companies()
    {
        return $this->hasMany('App\Company');
    }
}
