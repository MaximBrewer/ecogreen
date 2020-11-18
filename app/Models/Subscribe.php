<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    protected $table = 'subscribes';
    protected $fillable = ['email'];

    public static function isSubscribed($email){
        $email = Subscribe::where('email',$email)->first();
        if ($email)
            return true;
        return false;
    }
    public static function subscribe($email){
        Subscribe::create(['email'=>$email]);
    }

}
