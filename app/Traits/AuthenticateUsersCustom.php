<?php

namespace App\Traits;

use App\Models\DatabaseStorageModel;
use App\Models\Product;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

trait AuthenticateUsersCustom
{
    use AuthenticatesUsers;

    public function login(Request $request)
    {
        $old_session_id = $request->session()->getId();
        $old_cart_data = DatabaseStorageModel::find($old_session_id.'_cart_items');

        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            if ($old_cart_data) {
                if ($old_cart_data->cart_data->count()) {
                    \Cart::session(auth()->id());
                    $old_cart_data->cart_data->each(function ($item) {
                        $item = $item->toArray();
                        \Cart::add($item);
                    });
                }
            }

            // clear cart from storage for guests
            \Cart::session($old_session_id)->clear();

            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
}
