<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsuranceType extends Model
{
    public function insurance()
    {
        return $this->belongsto('App\Insurance');
    }

}
