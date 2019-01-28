<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    protected $fillable =['service_id','file_type_id','filename','uri','user_id'];
    protected $dates=['created_at'];

    public $timestamps=true;
    public function service()
    {
        return $this->belongsto('App\Service');
    }

    public function file_type()
    {
        return $this->belongsto('App\FileType');
    }
}
