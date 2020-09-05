<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CvAcceptRejectInfo extends Model
{
    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo('App\User','company_id')->withDefault();
    }
}
