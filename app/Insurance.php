<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    public function insurance_types()
    {
        return $this->hasMany('App\InsuranceType');
    }

    public function services()
    {
        return $this->belongsToMany('App\Service');
    }
}
