@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="text-page">
            <div class="breadcrubms">
                <a href="{{route('main')}}">Главная</a>
                /
                <a href="{{route('substances')}}">Действующее вещество</a>
            </div>
            <h2 class="main_grey-text text-page__top-h">Действующее вещество</h2>
             <div class="crop-guide-catalog">
                 @foreach($substances as $item)
                     <div class="crop-guide-catalog__item" style="background: url({{($item->image)?asset('storage/'.str_replace("\\","/",$item->image)):asset('/assets/images/chemicals_bg.jpg')}})">
                         <div class="crop-guide-catalog__item-overlay">
                             <div class="crop-guide-catalog__item-title">
                                 {{$item->name}}
                             </div>
                             <a href="{{route('chemical',['id'=>$item->id])}}" class="crop-guide-catalog__item-link">Читать далее
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
