<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsuranceType extends Model
{
    public function service()
    {
        return $this->belongsToMany('App\Service');
    }

}
