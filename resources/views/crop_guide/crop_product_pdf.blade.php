<!DOCTYPE html>
<html lang="en" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        *{
            font-family: DejaVu Sans;
        }       
    </style>      
</head>

<body id="page-top">
    <h2 class="main_grey-text text-page__top-h">{{$post->title}}</h2>
    <br/>
    <br/>
    <p class="usual-text usual-text__grey">
        {!! $post->body !!}
    </p>

</body>
</html>

