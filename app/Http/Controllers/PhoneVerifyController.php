<?php


namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class PhoneVerifyController extends Controller
{
    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    // 1-type
    protected function verify(Request $request)
    {
        $data = $request->validate([
            'verification_code' => ['required', 'numeric'],
            'phone' => ['required', 'string'],
        ]);
        $phone = '+'.$data['phone'];
        /* Get credentials from .env */
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_ACCOUNT_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        try {
            $twilio = new Client($twilio_sid, $token);

        $verification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verificationChecks
            ->create($data['verification_code'], array('to' => $phone));
            if ($verification->valid) {
                $user = tap(User::where('phone', $data['phone']))->update(['verified' => true]);
                /* Authenticate user */
                Auth::login($user->first());
                return redirect($this->redirectTo)->with(['success' => 'Phone number verified']);

            }
        } catch (ConfigurationException $e) {
        } catch (TwilioException $e) {
        }
        return back()->with(['phone' => $data['phone'], 'error' => 'Invalid verification code entered!']);
    }

    /**
     * Resend the phone verification code.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     * @throws ConfigurationException
     */
    public function resend(Request $request)
    {
        if ($request->user()->hasVerifiedPhone()) {
            return $request->wantsJson()
                ? new JsonResponse([], 204)
                : redirect($this->redirectPath());
        }

        // Send SMS asking to confirm account
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_ACCOUNT_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $twilio->verify->v2->services($twilio_verify_sid)
            ->verifications
            ->create('+'.$request->phone, "sms");

        return $request->wantsJson()
            ? new JsonResponse([], 202)
            : back()->with('resent', true);
    }

    /*
     * 2-type
    * */
//    protected function verify(Request $request)
//    {
//        if ($request->user()->verification_code !== $request->code) {
//            throw ValidationException::withMessages([
//                'code' => ['The code your provided is wrong. Please try again or request another call.'],
//            ]);
//        }
//
//        if ($request->user()->hasVerifiedPhone()) {
//            return redirect($this->redirectTo);
//        }
//        $request->user()->markPhoneAsVerified();
//
//        return redirect($this->redirectTo)->with('success', 'Your phone was successfully verified!');
//    }
}
