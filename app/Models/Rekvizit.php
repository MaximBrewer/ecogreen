<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rekvizit extends Model
{
    protected $table="rekvizits";
    protected $guarded=[""];
    public function getUser(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
