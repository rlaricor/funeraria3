<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function files()
    {
        return $this->hasMany('App\File');
    }

    public function insurances()
    {
        return $this->belongsToMany('App\Insurance');
    }

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

    public function people()
    {
        return $this->belongsToMany('App\Person');
    }
}
