<?php

namespace App\Http\Controllers;

use App\Models\ChatRoom;
use App\Models\Messages;
use App\Models\OrderDocument;
use App\Models\UserSettings;
use App\Services\FileService;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Image;
use App\Models\Orders;
use App\Models\OrderItems;
use App\Models\Documents;
use App\Models\Rekvizit;

class CabinetController extends Controller
{
    public function profile(){

        $id=Auth::user()->id;
        $getItem=User::findOrFail($id);
        $contents=Documents::where('user_id',$id)->get() ?? [];

        return view('user_cabinet.profile',compact(['getItem','contents']));
    }

    public function profile_update(Request $request){
        // dd($request->all());
        $id=Auth::user()->id;
        $id=User::findOrFail($id);
        $request->validate([
                'name'=>'required',
                'email'=>'required|email|unique:users,email,'.$id->id
            ]);
         $data=[
                'name'=>$request->name,
                'name_organization'=>$request->organization,
                'username'=>$request->user_name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'billing_address'=>$request->d_address,
                'inn'=>$request->inn,
                'city'=>$request->city,

            ];

        $id->update($data);
        return redirect()->route('cabinet.profile')->with('success','Данные успешно обновлены');
   }
    public function image_delete(){
        $id=Auth::user()->id;
        $id=User::findOrFail($id);
        if($id->avatar!="users/default.png"){

            unlink(storage_path('app\public\\'.$id->avatar));
            $id->update([
                'avatar'=>"users/default.png"
            ]);
        }
        return redirect()->back()->with('success','Изображение профиля успешно удалено.');
    }

    public function password_update(Request $request){
        $request->validate([
            'old_password'=>'required|min:6',
            'password'=>'required|min:6|',
            'password_confirmation'=>'required|min:6'
        ]);
        $password = Auth::user()->id;
        $item=User::findOrFail($password);

        if($request->password!==$request->password_confirmation){

            return redirect()->back()->with('error','Ошибка повторного ввода пароля.');
        }
        if(\Hash::check($request->old_password,$item->password)){
            $item->update([
                'password'=> bcrypt($request->password)
            ]);
            return redirect()->route('cabinet.profile')->with('success','Смена пароля прошла успешно.');

        }else{
            return redirect()->back()->with('error','Старый пароль написан с ошибкой.');

        }

    }

    public function basket(){
        return view('user_cabinet.basket')->with('active', 'Каталог');
    }

    public function order($order_id){
        $contents=OrderItems::where('order_id',$order_id)->get();
        $get=Orders::where('id',$order_id)->first();
        $docs = OrderDocument::where('order_id',$order_id)->get()??[];
        return view('user_cabinet.order',compact('contents','get','docs'));
    }

    public function orders(){
        $user_id=Auth::user()->id;
        $items=Orders::where('user_id',$user_id)->get();
        return view('user_cabinet.orders',compact('items'));
    }

    public function personal_data(){
        return view('user_cabinet.personal_data');
    }

    public function getModal(){

        if(Auth::user()){
            $id=Auth::user()->id;
            $user = User::findOrFail($id);
            $result = [
                'result' => true,
                'data' => [
                    'email' =>$user->email,
                    'name'=>$user->name
                ]
            ];
        }else{
            $result = [
                'result' => false
            ];
        }

        return response()->json($result);
    }
    public function profile_image(Request $request){
        $id=Auth::user()->id;
        $id=User::findOrFail($id);
        if($request->file('img')){

            if($id->avatar!="users/default.png"){

                unlink(storage_path('app\public\\'.$id->avatar));
            }
            $image_name =$request->file('img');
            $image_name_1=$image_name->getClientOriginalName() . '.' . $image_name->getClientOriginalExtension();
            // $full_path = storage_path('app/public/'.$image_name);
            $full_path_thumb = storage_path('app/public/users/'.$image_name_1);
            //Make directory for avatar
            // Storage::disk('public')->makeDirectory('thumbs/avatar');

            $thumbs = Image::make($request->file('img'));
            $thumbs->fit(213, 189, function($constraint) {
                $constraint->aspectRatio();
            })->save($full_path_thumb);
            $avatar='users/'.$image_name_1;
            $id->update([
                'avatar'=>$avatar
            ]);
            return redirect()->back()->with('success','Изображение профиля успешно обновлено');
        }else{
            return redirect()->back()->with('warning','Не изменилось');
        }
    }


    public function questions(){
        $user_id = auth()->user()->id;
        $room = ChatRoom::firstOrCreate([
            'user_id'=>$user_id
        ]);
        $messages = Messages::where('chat_room_id',$room->id)->latest()->get();
        Messages::where([['chat_room_id',$room->id], ['status','NEW'], ['user_id','!=', $user_id]])->update(['status'=>'VIEWED']);

        return view('user_cabinet.questions', compact('messages', 'user_id', 'room'));
    }

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
        return redirect()->back()->with(['success' => 'Вопрос успешно отправлен!']);
    }
    public function getUserDocuments(){
        $user_id=Auth::user()->id;
        $getItem=User::findOrFail($user_id);
        $contents=Documents::where('user_id',$user_id)->get() ?? [];
        return view('user_cabinet.docs',compact('contents','getItem'));
    }
//    public function getUserRekvizits(){
//        $user_id=Auth::user()->id;
//        $getItem=User::findOrFail($user_id);
//        $contents=Rekvizit::where('user_id',$user_id)->get() ?? [];
//        return view('user_cabinet.rekvizit',compact('contents','getItem'));
//    }
    public function getOneDocument($id){
       $document=Documents::findOrFail($id);
       $file_path=explode('"',$document->file)[3];
       $pathFile=storage_path('app/public/'.$file_path);
       return response()->download($pathFile);
    }
//    public function getOneRekvizit($id){
//       $document=Rekvizit::findOrFail($id);
//       $file_path=explode('"',$document->file)[3];
//       $pathFile=storage_path('app/public/'.$file_path);
//       return response()->download($pathFile);
//    }
    public function getOneOrderDocument($id){
       $document=OrderDocument::findOrFail($id);
       $file_path=explode('"',$document->file)[3];
       $pathFile=storage_path('app/public/'.$file_path);
       return response()->download($pathFile);
    }
    public function getZipOrderDocument($id){
       $documents=OrderDocument::where('order_id',$id)->get() ?? [];
       if(count($documents)>0){
            $zip_file=time().'.zip';
            $zip=new \ZipArchive();
            $zip->open($zip_file,\ZipArchive::CREATE | \ZipArchive::OVERWRITE);
            foreach($documents as $value){
                $file_path=explode('"',$value->file)[3];
                $zip->addFile(storage_path('app/public/'.$file_path));
            }
            $zip->close();
            return response()->download($zip_file);
        }else{
            return redirect()->back()->with('error','Файл не найти здесь');
        }
    }
    public function cabinetModal(Request $request){
        $request->validate([
            'file'=>'required'
        ]);
        $files=$request->file;
        foreach($files as $file){
            $content=FileService::uploadWithCrop($file,'documents');
            $user_id=Auth::user()->id;
            $getItem=User::findOrFail($user_id);
            $data=[
                'product_id'=>Null,
                'user_id'=>$user_id,
                'file'=>$content
            ];
            Documents::create($data);
        }
        $contents=Documents::where('user_id',$user_id)->get() ?? [];
        // return response()->json([
        //     'message'=>"Success"
        // ]);
        return redirect()->route('documents')->with(['success'=>'Файл успешно загружен','contents'=>$contents,'getItem'=>$getItem]);
    }
    public function settings(){
        $user_id=Auth::user()->id;
        $getItem=User::findOrFail($user_id);
        $contents=Documents::where('user_id',$user_id)->get() ?? [];
        $settings = UserSettings::where('user_id',$user_id)->first()??null;
        return view('user_cabinet.settings', compact('settings','getItem','contents'));
    }
    public function settingUpdate(Request $request){
        $user_id=Auth::user()->id;
        $user=User::findOrFail($user_id);
        $setting = $user->getSetting();
        $setting->update([
            $request->id =>$request->value
        ]);
        return response()->json([
            'message'=>'Настройка обновлено!',
        ]);
    }
}
