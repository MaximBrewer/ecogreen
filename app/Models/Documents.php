<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $table="documents";
    protected $guarded=[""];
    public function getUser(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
