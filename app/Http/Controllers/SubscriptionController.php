<?php

namespace App\Http\Controllers;

// For spatie/laravel-newsletter package
//use Newsletter;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        // validator to redirect to an anchor with error named bag
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        if($validator->fails()){
            // if request does not contain valid email
            return response()->json([
                'error' => true,
                'message' => 'Неправильная почта!',
            ]);
        }

        if (Subscribe::isSubscribed($request->email) ) {
            //send error, already sub
            return response()->json([
                'message' => 'Вы уже подписались!',
                'warning' => true
            ]);

        }

        // Store email in DB
        Subscribe::subscribe($request->email);

        return response()->json([
            'success' => true,
            'message' => 'Спасибо за подписку ' . $request->email . '!'
        ]);

    }
}
