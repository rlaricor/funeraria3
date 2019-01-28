<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProofPaymentType extends Model
{
    use SoftDeletes;

    protected $fillable=['proof_payment_type','user_id'];
    protected $dates=['deleted_at'];

    public $timestamps=true;
    public function payment()
    {
        return $this->hasMany('App\Payment');
    }
}
