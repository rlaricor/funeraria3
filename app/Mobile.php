<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    public function person()
    {
        return $this->belongsto('App\Person');
    }
}
