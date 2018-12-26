<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProofPaymentType extends Model
{
    public function payment()
    {
        return $this->hasMany('App\Payment');
    }
}
