<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function service()
    {
        return $this->belongsto('App\Service');
    }

    public function file_type()
    {
        return $this->belongsto('App\FileType');
    }
}
