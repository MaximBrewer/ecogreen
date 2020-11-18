<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chemical extends Model
{
    protected $table="chemicals";
    protected $guarded=[];
    protected $casts = [
        'image' => 'string'
    ];
}
