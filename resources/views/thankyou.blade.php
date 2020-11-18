@extends('layouts.site')

@section('title', __('Оформить заказ'))
@section('code', '404')
@section('message', __('Not Found'))
@section('content')
    <div class="container">
        <div class="breadcrubms">
            <a href="{{route('main')}}">Главная</a>
            /
            <a href="{{ route('cart.index') }}">Корзина</a>
        </div>
        <h2 class="main_grey-text text-page__top-h">Корзина</h2>

        <h3>@lang('Ваш заказ принят!')</h3>
        <br>
        <a href="{{ route('cabinet.profile') }}"
           class="main-button main-button_yellow product__info-block__black-button product__info-block__black-button_help small-product-button">
            @lang('Возвращаться домой!')
        </a>
        <hr>
    </div>
@endsection
