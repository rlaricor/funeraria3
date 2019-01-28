<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $fillable=['tipo','contract_number','contract_date','death_date','place_registration_id','registration_observation','total_amount','insurance_charged','user_id'];
    protected $dates=['deleted_at'];

    public $timestamps=true;

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

    public function place_registration()
    {
        return $this->belongsTo('App\PlaceRegistration');
    }
}
