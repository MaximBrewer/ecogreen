<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    protected $table = 'chat_room';
    protected $fillable = ['id', 'user_id'];

    public function messages(){
        return $this->hasMany(Messages::class, 'chat_room_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
