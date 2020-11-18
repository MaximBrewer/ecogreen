<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table = 'messages';
    protected $fillable = ['user_id', 'reply_message_id', 'message', 'status', 'chat_room_id'];

    protected $dates = ['created_at', 'updated_at'];

    public function sender(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function room(){
        return $this->belongsTo(ChatRoom::class, 'chat_room_id', 'id');
    }
    protected $appends = ['createdAtDateHumanReadable'];

    public function getCreatedAtDateHumanReadableAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
