<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActiveSubstance extends Model
{
    protected $table="active_substance";
    protected $guarded=[""];
    protected $casts = [
        'image' => 'string'
    ];
}
