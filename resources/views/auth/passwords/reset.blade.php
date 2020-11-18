@extends('layouts.site')

@section('content')
<div class="container">
    <div class="enter-form-wrapper">
        <div class="enter-form">
            <div class="enter-form__title">{{ __('Сброс пароля') }}</div>
            <br>
            <div class="enter-form__subtitle">{{ __('Пожалуйста, подтвердите свой пароль, прежде чем продолжить.') }}</div>
            <br>
            <form method="POST" action="{{ route('password.update') }}" class="enter-form__form">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <input id="email" type="email" class="enter-form__input classic-input form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="{{ __('Адрес электронной почты') }}" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="password" type="password" placeholder="{{ __('Пароль') }}" class="enter-form__input classic-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="password-confirm" placeholder="{{ __('Подтвердить Пароль') }}" type="password" class="enter-form__input classic-input form-control" name="password_confirmation" required autocomplete="new-password">
                <br>
                <button type="submit" class="main-button main-button_yellow">
                    {{ __('Сброс пароля') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
