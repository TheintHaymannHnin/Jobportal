<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User','employee_id')->withDefault();
    }

    public function job()
    {
        return $this->belongsTo('App\Job','job_id')->withDefault();
    }
}
