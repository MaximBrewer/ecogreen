<?php

namespace App\Http\Controllers;

use App\Models\ChatRoom;
use App\Models\Messages;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatRoomController extends Controller
{
    // it is for admin
    public function questions($id){
        $room = ChatRoom::where('id','=', $id)->first();
        $user_id = $room->user_id;
        $messages = Messages::where('chat_room_id',$room->id)->latest()->get();
        //Update not viewed messages status to viewed
        Messages::where([['chat_room_id',$room->id], ['status','NEW'], ['user_id', $user_id]])->update(['status'=>'VIEWED']);
        return view('vendor.voyager.chat-room.messages', compact('messages', 'user_id', 'room'));
    }
    // it is for admin
    public function sendQuestion(Request $request){
        $request->validate([
            'room_id'=> 'required',
            'message' => 'required|string',
        ]);
        $message = Messages::create([
            'chat_room_id'=> $request->room_id,
            'user_id'=> auth()->user()->id,
            'message' => $request->post('message'),
            'reply_message_id' => $request->post('reply_message_id') ?? null,
        ]);
        return redirect()->back()->with(['success' => 'Question sent successfully!']);
    }
    //it is for user
    public function getNewMessages(){
        $room = Auth::user()->chatRoom ?? null;
        if ($room){
            $messages = Messages::with('sender')->where([['user_id','!=', Auth::user()->id],['chat_room_id','=',$room->id], ['status','=', 'NEW']]);
            $latest = $messages->latest()->first();
            $count = $messages->count();
            return response()->json([
                'result'=> $count,
                'latest'=>$latest
            ]);
        }else{
            return response()->json([
                'result'=>null,
                'message'=>"no chat room",
            ]);
        }
    }
}
