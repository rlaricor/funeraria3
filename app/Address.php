<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function person()
    {
        return $this->belongsto('App\Person');
    }
}
