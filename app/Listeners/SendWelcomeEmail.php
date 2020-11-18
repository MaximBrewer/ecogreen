<?php


namespace App\Listeners;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail
{
    /**
     * Handle the event.
     *
     * @param Registered $event
     */
    public function handle(Registered $event)
    {
        //send the welcome email to the user
        $user = $event->user;
        if($user->getSetting->ml_1 && setting('site.ml_1')){
            Mail::send('vendor.notifications.email', ['user' => $user], function ($message) use ($user) {
                $message->from(getenv('MAIL_FROM_ADDRESS'), getenv('MAIL_FROM_NAME'));
                $message->subject('Добро пожаловать на ЭкоГрин '.$user->username.'!');
                $message->to($user->email);
            });
        }
    }
}
