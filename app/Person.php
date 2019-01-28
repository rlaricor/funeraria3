<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes;

    protected $fillable = ['person_type_id','person_condition','document_id','birthday','name','last_name','userid_id'];
    protected $dates=['birthday','deleted_at'];

    public $timestamps = true;
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

