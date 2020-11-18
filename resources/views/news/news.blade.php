@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="text-page">
            <div class="breadcrubms">
                <a href="{{route('main')}}">Главная</a>
                /
                <a href="{{route('news')}}">Новости</a>
            </div>
            <h2 class="main_grey-text text-page__top-h">Новости</h2>
            <div class="crop-guide-catalog">
                @foreach($posts as $post)
                    <div class="crop-guide-catalog__item" style="background: url({{asset('storage/'.$post->image)}})">
{{--                        <div class="news-overlay">--}}
                        <div class="crop-guide-catalog__item-overlay">
                            <div class="crop-guide-catalog__item-title">
                                {{Str::of($post->title)->limit(16)}}
                            </div>
{{--                            <div class="news-overlay__news-line">--}}
{{--                                <span class="main_green-text">НОВОСТИ КОМПАНИИ</span>--}}
{{--                                <span>{{date_format($post->created_at, 'd.m.Y')}}</span>--}}
{{--                            </div>--}}
                            <div class="crop-guide-catalog__item-text">
                                {{Str::of($post->excerpt)->limit(150)}}
                            </div>
                            <a href="{{route('news.one',['slug'=>$post->slug])}}" class="crop-guide-catalog__item-link">Читать далее
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.54546 10.9242L14 7.21212L9.54546 3.5V6.0456H0V8.59106H9.54546V10.9242Z" fill="#FF9900"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
        </div>
    </div>
@endsection