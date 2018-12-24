<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $timestamps = true;
    protected $fillable = [

    ];

    public function addresses()
    {
      return $this->hasMany('App\Address');
    }

    public function emails()
    {
        return $this->hasMany('App\Email');
    }

    public function mobiles()
    {
        return $this->hasMany('App\Mobile');
    }

    public function person_type()
    {
        return $this->belongsTo('App\PersonType');
    }

    public function services()
    {
        return $this->belongsToMany('App\Service');
    }
}

