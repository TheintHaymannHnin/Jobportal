<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded= [];

    public function category()
    {
        return $this->belongsTo('App\Category','category_id')->withDefault();
    }

    public function company()
    {
        return $this->belongsTo('App\User','company_id')->withDefault();

    }

    public function type()
    {
        return $this->belongsTo('App\Type','type_id')->withDefault();
    }
}
