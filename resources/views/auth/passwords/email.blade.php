@extends('layouts.site')

@section('content')
<div class="container">
    <div class="enter-form-wrapper">
        <div class="enter-form">
            <div class="enter-form__title">{{ __('Сброс пароля') }}</div>
            <br>
            <div class="enter-form__subtitle">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <br>
            <form method="POST" action="{{ route('password.email') }}" class="enter-form__form">
                @csrf
                <input id="email" type="email" placeholder="{{ __('Адрес электронной почты') }}" class="enter-form__input classic-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>
                 <button type="submit" class="main-button main-button_yellow">
                        {{ __('Отправить ссылку для сброса пароля') }}
                 </button>
            </form>
        </div>
    </div>
</div>
@endsection
