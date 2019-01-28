<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mobile extends Model
{
    use SoftDeletes;

    protected $fillable=['person_id','mobile','user_id'];
    protected $dates=['deleted_at'];

    public $timestamps=true;
    public function person()
    {
        return $this->belongsto('App\Person');
    }
}
