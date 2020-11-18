<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        VerifyEmail::toMailUsing(function (User $user, string $verificationUrl) {
            return (new MailMessage)
                ->subject(Lang::get('Подтвердите адрес электронной почты'))
                ->line(Lang::get('Пожалуйста, нажмите кнопку ниже, чтобы подтвердить свой адрес электронной почты.'))
                ->action(Lang::get('Подтвердите адрес электронной почты'), $verificationUrl)
                ->line(Lang::get('Если вы не создавали учетную запись, никаких дальнейших действий не требуется.'));
        });
    }
}
