<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Condition extends Model
{
    use SoftDeletes;

    protected $fillable = ['service_id','condition','user_id'];
    protected $dates =['deleted_at'];

    public $timestamps=true;
    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
