<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class Employee extends Model
{
    use SoftDeletes;

    protected $fillable =['user_id'.'gender','document_id','name','lastname','email','birthday','user_id'];

    protected $dates=['birthday','deleted_at'];

    public $timestamps;

    public function birthday()
    {
        return $this->birthday->format('d-m-Y');
    }
}
