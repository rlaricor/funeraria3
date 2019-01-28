<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InsuranceType extends Model
{
    use SoftDeletes;

    protected $fillable=['insurance','user_id'];
    protected $dates=['deleted_at'];

    public $timestamps=true;
    public function service()
    {
        return $this->belongsToMany('App\Service');
    }
}
