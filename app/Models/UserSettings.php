<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSettings extends Model
{
    protected $table = 'user_settings';
    protected $fillable=['user_id'];

    public static $SETTING = [
        'notify'=>[
            'message'=>'nt_1',
            'order'=>'nt_2',
            'status'=>'nt_3',
            'chat'=>'nt_4'
        ],
        'mailing'=>[
            'message'=>'ml_1',
            'order'=>'ml_2',
            'status'=>'ml_3',
            'chat'=>'ml_4'
        ]
    ];

}
