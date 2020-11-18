@extends('layouts.site')

@section('content')
    <? if (!isset($active)) {
        $active = "";
    }  ?>

    <div class="container">
        <div class="breadcrubms">
            <a href="/">Главная</a>
            /
            <a href="{{route('login')}}">Вход</a>
        </div>
            <div class="enter-form-wrapper">
                <div class="enter-form">
                    <div class="enter-form__title">Войти</div>
                    <br>
                    <div class="enter-form__subtitle">Войдите в систему прямо сейчас, чтобы работу</div>
                    <br>
                        <form method="POST" action="{{ route('login') }}" class="enter-form__form">
                            @csrf
                            <div class="form-group inner-addon">
                                <svg class="glyphicon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9805 4.78212C19.9935 4.80895 20 4.83578 20 4.86261V15.2461C20 15.7827 19.8698 16.2925 19.6094 16.7755C19.349 17.2584 18.9583 17.4999 18.4375 17.4999H2.1875C1.66666 17.4999 1.17188 17.2584 0.703125 16.7755C0.234373 16.2925 0 15.7827 0 15.2461V4.86261C0 4.83578 0.00651045 4.80895 0.0195313 4.78212C-0.00651045 4.68821 -0.00651045 4.59765 0.0195313 4.51045C0.0455731 4.42325 0.0911456 4.33941 0.15625 4.25891C0.169271 4.2455 0.182292 4.22873 0.195313 4.20861C0.208333 4.18848 0.227865 4.17171 0.253906 4.1583C0.44922 3.88999 0.72591 3.68541 1.08398 3.54454C1.44206 3.40368 1.80989 3.33325 2.1875 3.33325H18.4375C18.8542 3.33325 19.1895 3.42381 19.4434 3.60491C19.6973 3.78602 19.8633 4.05768 19.9414 4.4199C19.9674 4.47356 19.9837 4.53058 19.9902 4.59095C19.9967 4.65132 19.9935 4.71504 19.9805 4.78212ZM1.89453 4.62122C1.79036 4.62122 1.6862 4.62793 1.58203 4.64134L10 11.5637L18.4375 4.62122H1.89453ZM18.4375 16.212C18.6068 16.212 18.7012 16.0946 18.7207 15.8598C18.7402 15.625 18.75 15.4204 18.75 15.246V6.02966L10.4102 12.8916C10.3451 12.9453 10.2799 12.9855 10.2148 13.0124C10.1497 13.0392 10.0781 13.0526 10 13.0526C9.92187 13.0526 9.85026 13.0392 9.78516 13.0124C9.72005 12.9855 9.65495 12.9453 9.58984 12.8916L1.25 6.02966V15.246C1.25 15.4204 1.36393 15.625 1.5918 15.8598C1.81966 16.0946 2.01823 16.212 2.1875 16.212H18.4375Z" fill="#959393"/>
                                </svg>
                                <input class="enter-form__input classic-input form-control @error('username') is-invalid @enderror" type="text" placeholder="Email либо телефон либо Имя пользователя" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input class="enter-form__input classic-input form-control @error('password') is-invalid @enderror" type="password"  name="password" required autocomplete="current-password" placeholder="Пароль">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="enter-form__remember-line">
                                <div>
                                    <div class="checkbox">
                                        <input class="custom-checkbox" type="checkbox" id="color-1" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="color-1">Запомни меня</label>
                                    </div>
                                </div>
                                @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                        {{ __('Забыли пароль?') }}
                                    </a>
                                @endif
                            </div>

                            <button type="submit" class="main-button main-button_yellow">Войти</button>
                            <br>
                            У вас еще нет аккаунта? <a href="{{route('register')}}" class="enter-form_green-link">Зарегестрироваться</a>
                        </form>
                </div>
            </div>
    </div>
@endsection
