<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded=['category','company','type'];

    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }

    public function company()
    {
        return $this->belongsTo('App\Company','company_id');
    
    }
    
    public function type()
    {
        return $this->belongsTo('App\Type','type_id');
    }
}
