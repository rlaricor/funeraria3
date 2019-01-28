<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Email extends Model
{
    use SoftDeletes;

    protected $fillable = ['person_id','email','user_id'];
    protected $dates=['deleted_at'];

    public $timestamps=true;
    public function person()
    {
        return $this->belongsto('App\Person');
    }
}
