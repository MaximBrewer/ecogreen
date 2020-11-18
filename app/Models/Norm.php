<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Norm extends Model
{
    protected $table="norms";
    protected $guarded=[];

    protected function getPost(){
        return $this->belongsTo('App\Models\Post','post_id','id');
    }
}
