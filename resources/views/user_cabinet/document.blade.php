@extends('layouts.cabinet')
@section('cabinet_content')
<div class="cabinet-container">
    <div class="cabinet__top-h">
        <div class="breadcrubms">
            <a href="/">Главная</a>
            /
            <a href="{{ route('documents') }}">
                Документы</a>
        </div>
        <h2 class="main_grey-text text-page__top-h">Документы</h2>
    </div>
</div>
@include('user_cabinet.modal_document');
<div class="cabinet-orders">
    @if($message = session()->get('success'))
            <div class="container">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
        @endif
    <table class="cabinet-orders__table table_sort table_sort-order">
        <thead>
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Email</th>
            <th>File</th>
        </tr>
        </thead>
        <tbody>
            {{-- <tr>
                <td>Мерпан СП<br>
                    <span class="grey-subtext">Агрохимикаты</span></td>
                <td>10</td>
                <td>1 700 кг.</td>
                <td>15, 00 руб.</td>
            </tr> --}}
            @foreach($contents as $key=>$value)
                @php
                    $array=explode('"',$value->file);
                    $file_name=$array[7];
                @endphp
                <tr>
                    <td>{{ ++$key }}<br>
                    <td>{{ $value->getUser->name }}</td>
                    <td>{{ $value->getUser->email }}</td>
                    <td><a href="{{ route('document',$value->id) }}">{{ $file_name }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button data-toggle="modal" data-target="#requestDocumentModal">
        <svg width="16" height="20" viewBox="0 0 16 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M12 0.666687C12.7364 0.666687 13.3333 1.26364 13.3333 2.00002V16C13.3333 16.7364 12.7364 17.3334 12 17.3334H1.33333C0.596954 17.3334 0 16.7364 0 16V2.00002C0 1.26364 0.596954 0.666687 1.33333 0.666687H12ZM12 1.33335H1.33333C0.991443 1.33335 0.709662 1.59071 0.671152 1.92227L0.666667 2.00002V16C0.666667 16.3419 0.924027 16.6237 1.25559 16.6622L1.33333 16.6667H12C12.3419 16.6667 12.6237 16.4093 12.6622 16.0778L12.6667 16V2.00002C12.6667 1.65813 12.4093 1.37635 12.0777 1.33784L12 1.33335ZM4 19.3334C3.26362 19.3334 2.66667 18.7364 2.66667 18L3.33333 18C3.33333 18.3419 3.59069 18.6237 3.92225 18.6622L4 18.6667H14.6667C15.0086 18.6667 15.2903 18.4093 15.3288 18.0778L15.3333 18V4.00002C15.3333 3.65813 15.076 3.37635 14.7444 3.33784L14.6667 3.33335H14V2.66669H14.6667C15.403 2.66669 16 3.26364 16 4.00002V18C16 18.7364 15.403 19.3334 14.6667 19.3334H4ZM6.38892 5.94598V8.23612H3.94596C3.61185 8.23612 3.33333 8.50973 3.33333 8.84724C3.33333 9.1871 3.60761 9.45835 3.94596 9.45835H6.38892V12.0541C6.38892 12.3882 6.66252 12.6667 7.00003 12.6667C7.33989 12.6667 7.61114 12.3924 7.61114 12.0541V9.45835H10.054C10.3881 9.45835 10.6667 9.18474 10.6667 8.84724C10.6667 8.50737 10.3924 8.23612 10.054 8.23612H7.61114V5.94598C7.61114 5.61187 7.33753 5.33335 7.00003 5.33335C6.66017 5.33335 6.38892 5.60763 6.38892 5.94598Z"
                    fill="#959393"/>
        </svg>
        {{-- <span>Прикрепить файл</span> --}}
    </button>
</div>
@endsection   