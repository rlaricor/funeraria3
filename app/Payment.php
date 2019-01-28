<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;

    protected $fillable=['service_id','proof_payment_type_id','number_proof','amount','observation','userid_id',];
    protected $dates=['deleted_at'];

    public $timestamps=true;
    public function service()
    {
        return $this->belongsto('App\Service');
    }
}
