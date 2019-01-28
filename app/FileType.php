<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FileType extends Model
{
    use SoftDeletes;

    protected $fillable =['file_type','useri_id'];
    protected $dates=['deleted_at'];

    public $timestamps=true;
    public function file()
    {
        return $this->hasMany('App\File');
    }
}
