@extends('layouts.site')

@section('content')
<div class="container">
    <div class="enter-form-wrapper">
        <div class="enter-form">
            <div class="enter-form__title">{{ __('Подтвердите свой номер телефона') }}</div>
            <br>

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('На ваш номер была отправлена новая ссылка для подтверждения.') }}
                        </div>
                    @endif

                    <div class="enter-form__subtitle">
                        {{ __('Пожалуйста, введите КОД, отправленный на ваш номер:') }} {{'+'.\Auth::user()->phone}}
                    </div>
                        <form action="{{route('verify.post')}}" method="post"  class="enter-form__form">
                            @csrf
                            <div class="form-group row">
                                <label for="verification_code"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Телефон номер') }}</label>
                                <div class="col-md-6">
                                    <input type="hidden" name="phone" value="{{\Auth::user()->phone}}">
                                    <input id="verification_code" type="tel"
                                           class="enter-form__input classic-input form-control @error('verification_code') is-invalid @enderror"
                                           name="verification_code" value="{{ old('verification_code') }}" required>
                                    @error('verification_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn main-button main-button_yellow">
                                        {{ __('Подтвердить номер телефона') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    <form class="enter-form__form" method="POST" action="{{ route('verify.phone.resend') }}">
                        @csrf
                        <input type="hidden" name="phone" value="{{\Auth::user()->phone}}">
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('нажмите здесь, чтобы запросить другой') }}</button>.
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
