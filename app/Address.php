<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;

    protected $fillable = ['person_id','address','user_id'];
    protected $dates=['deleted_at'];

    public $timestamps = true;
    public function person()
    {
        return $this->belongsto('App\Person');
    }
}
