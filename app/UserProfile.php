<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends Model
{
    use SoftDeletes;

    protected $fillable=[
        'user_profile','user_id'
    ];
    protected $dates=['deletead_at'];

    public $timestamps=true;

    public function users()
    {
        return $this->hasMany('App\User');
    }

}
