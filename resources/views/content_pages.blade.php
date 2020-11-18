@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="breadcrubms">
            <a href="{{route('main')}}">Главная</a> /
            <a href="{{route('content',['slug'=>$content->slug])}}">{{$content->name}}</a>
        </div>

        <h2 class="main_grey-text text-page__top-h">{{$content->name}}</h2>

        <div class="usual-text usual-text__grey" style="clear: both">
            {!! $content->description !!}
        </div>

    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
