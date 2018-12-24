<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileType extends Model
{
    public function file()
    {
        return $this->hasMany('App\File');
    }
}
