@extends('layouts.site')

@section('content')
<div class="container">
    <div class="enter-form-wrapper">
        <div class="enter-form">
            <div class="enter-form__title">{{ __('Подтвердите Ваш электронный адрес') }}</div>
            <br>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('На ваш адрес электронной почты была отправлена новая ссылка для подтверждения.') }}
                        </div>
                    @endif

                    <div class="enter-form__subtitle">
                        {{ __('Прежде чем продолжить, проверьте свою электронную почту на наличие ссылки для подтверждения.') }}
                        {{ __('Если вы не получили письмо') }},
                    </div>

                    <form class="enter-form__form" method="GET" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('нажмите здесь, чтобы запросить другой') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
