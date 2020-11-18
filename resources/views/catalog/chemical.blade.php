@extends('layouts.site')

@section('content')
    <div class="text-page">
        <div class="container">
            <div class="breadcrubms">
                <a href="/">Главная</a>
                /
                <a href="/catalog">Каталог</a>
                /
                <a href="{{(request()->get('product_id'))?route('catalog.product',['id'=>request()->get('product_id')]):route('catalog')}}">Продукт</a>
                /
                <a href="{{route('chemicals')}}">Химикаты</a>
                /
                <a href="{{route('substances')}}">Действующее вещество</a>
            </div>
            <h2 class="main_grey-text text-page__top-h">{{$item->name}}</h2>
        </div>
        <div class="container">

            <p class="usual-text usual-text__grey chemical-text">
             {!! $item->description !!}
            </p>


{{--            <ul class="chemical-substances">--}}
{{--                <span>Действующие вещества</span>--}}
{{--                <li><a href="#!">Бупрофезин</a></li>--}}
{{--                <li><a href="#!">Дифлубензурон</a></li>--}}
{{--                <li><a href="#!">Люфенурон</a></li>--}}
{{--                <li><a href="#!">Трифлумурон</a></li>--}}
{{--                <li><a href="#!">Циромазин</a></li>--}}
{{--            </ul>--}}
            <br>

        </div>
    </div>
@endsection
