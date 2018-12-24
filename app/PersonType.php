<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonType extends Model
{
    public function people()
    {
        return $this->hasMany('App\Person');
    }
}
