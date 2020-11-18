@extends('layouts.head')
@section('site')
    <body>
    <div>
        <main>
            @include('user_cabinet.header')
            @include('user_cabinet.side_menu')
        </main>
    </div>
    <script src="{{asset('assets/js/file-input.js')}}"></script>
    <script src="{{asset('assets/js/select.js')}}"></script>
    <script>
        $('#btn_click').click(function(){
            $("input[type='file']").click();
        });
    </script>
    @include('elements.notification')
    </body>
@endsection
