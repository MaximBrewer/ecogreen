@extends('voyager::master')

@section('page_title', __('Сообщения в чате'))

@section('page_header')
<h1 class="page-title">
    <i class="voyager-list"></i> {{ __('Messages') }}
</h1>
@stop
@section('content')
<div class="panel">
    <!--Widget body-->
    <div id="demo-chat-body" class="collapse in">
        <div class="nano has-scrollbar" style="height:380px">
            <div class="nano-content pad-all" tabindex="0" style="right: -17px;">
                <ul class="list-unstyled media-block">
                    @forelse($messages as $message)
                    <li class="mar-btm">
                        <div class="media-{{ ($message->user_id != $user_id) ? 'right' : 'left' }}">
                            <img src="{{'/storage/'.$message->sender->avatar}}" class="img-circle img-sm" alt="Profile Picture">
                        </div>
                        <div class="media-body pad-hor {{ ($message->user_id != $user_id) ? 'speech-right' : '' }}">
                            <div class="speech">
                                <a href="#" class="media-heading">{{$message->sender->name}}</a>
                                <p>
                                    <strong>
                                        {{$message->message}}
                                    </strong>
                                </p>
                                <p class="speech-time">
                                    <i class="fa fa-clock-o fa-fw"></i>{{$message->created_at->diffForHumans()}}
                                </p>
                            </div>
                        </div>
                    </li>
                    @empty
                        <h3 style="color: orange"> Сообщений пока нет </h3>
                    @endforelse
                </ul>
            </div>
            <div class="nano-pane"><div class="nano-slider" style="height: 141px; transform: translate(0px, 0px);"></div></div></div>

        <!--Widget footer-->
        <div class="panel-footer">
            <div class="row">
                <form method="POST" action="{{route('questions.send')}}">
                @csrf
                @method('POST')
                    <input type="hidden" name="room_id" value="{{$room->id}}">
                    <div class="col-xs-9">
                        <textarea placeholder="Поле для вопроса" name="message" id="" cols="30" rows="10" class="form-control chat-input" required></textarea>
                    </div>
                    @error('message')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="col-xs-3 col-lg-3">
                        <button type="submit" class="btn btn-primary btn-block">Отправить
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M21.8927 0.107449C21.7926 0.00661525 21.6422 -0.0263847 21.5084 0.0220153L0.241722 7.72201C0.103122 7.77225 0.00778868 7.90095 0.000455342 8.04835C-0.00687799 8.19575 0.0748887 8.33325 0.207989 8.39742L7.86619 12.0732L14.7837 6.96008C14.9531 6.83505 15.1654 7.04735 15.04 7.21638L9.92722 14.1339L13.6031 21.7921C13.6643 21.9193 13.793 22 13.9334 22C13.9397 22 13.9455 22 13.9518 21.9996C14.0992 21.9919 14.2279 21.897 14.2785 21.7584L21.9785 0.491715C22.0265 0.357882 21.9931 0.207915 21.8927 0.107449Z"
                                      fill="white"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('javascript')
<script>

</script>
@stop
