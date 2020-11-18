<?php

namespace App\Models;

use App\Services\FileService;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;


class License extends Model
{
    protected $table = 'license';
    use Resizable;

    public function getFileAttribute()
    {
        return FileService::voyager_image($this->attributes['file']);
    }

}
