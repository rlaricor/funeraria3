<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    protected $fillable =['user_id'.'gender','document_id','name','lastname','email','birthday','submitted_by'];
    protected $dates=['birthday','created_at'];

    public $timestamps;
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
