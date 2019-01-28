<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlaceRegistration extends Model
{
    use SoftDeletes;

    protected $fillable=['place_registration','user_id'];
    protected $dates=['deleted_at'];

    public $timestamps=true;
    public function service()
    {
        return $this->hasMany('App\Service');
    }
}
