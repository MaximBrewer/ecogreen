@extends('layouts.site')

@section('content')
<div class="container">
    <div class="enter-form-wrapper">
        <div class="enter-form">
            <div class="enter-form__title">{{ __('Подтвердить Пароль') }}</div>
            <br>
            <div class="enter-form__subtitle">{{ __('Пожалуйста, подтвердите свой пароль, прежде чем продолжить.') }}</div>
            <br>

            <form method="POST" action="{{ route('password.confirm') }}" class="enter-form__form">
                @csrf

                <input id="password" type="password" class="enter-form__input classic-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Пароль') }}">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="main-button main-button_yellow">
                            {{ __('Подтвердить Пароль') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="enter-form_green-link" href="{{ route('password.request') }}">
                                {{ __('Забыли свой пароль?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
