<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonType extends Model
{
    use SoftDeletes;

    protected $fillable=['person_type','user_id'];
    protected $dates=['created_at'];

    public $timestamps=true;
    public function people()
    {
        return $this->hasMany('App\Person');
    }
}
