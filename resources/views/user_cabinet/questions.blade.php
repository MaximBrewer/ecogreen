@extends('layouts.cabinet')

@section('cabinet_content')
    <div class="cabinet-container">
        <div class="cabinet__top-h">
            <div class="breadcrubms">
                <a href="/">Главная</a>
                /
                <a href="/cabinet/profile">Личный кабинет</a>
            </div>
            <h2 class="main_grey-text text-page__top-h">Связь с менеджером</h2>
        </div>
    </div>
    <div class="cabinet-container">
        <div class="questions">
            <div class="questions__message-container">
                @forelse($messages as $message)
                    <div class="questions__message questions__message-{{ ($message->user_id == $user_id) ? 'right' : 'left' }}">
                        <div class="questions__message-container">
                            <div class="questions__message-inner">
                                <div class="user-{{($message->sender->is_active == true) ? 'online' : 'offline'}}">
                                    <div class="user-online-circle user-online-circle-{{($message->sender->is_active == true) ? 'online' : 'offline'}}">
                                    </div>
                                    <img class="questions__message-avatar" src="{{'/storage/'.$message->sender->avatar}}"
                                         alt="user-avatar">
                                </div>
                                <div class="questions__message-lw">
                                    <div class="questions__message-from">{{ ($message->user_id != $user_id) ? 'Менеджер' : ''}} {{$message->sender->name}} </div>
                                    <div class="questions__message-time">{{$message->created_at->diffForHumans()}}</div>
                                    <div class="questions__message-text">
                                        {{$message->message}}
                                    </div>
                                </div>
                            </div>
                            @if($message->user_id != $user_id)
                            <div class="questions__message-response-action-wrapper">
                                <div class="questions__message-response-action">
                                    <a href="javascript:;">
                                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.99998 5.16648V0.666504L0 7.66648L7.99998 14.6665V10.1665C10.8443 9.85044 13.6779 10.8444 15.7015 12.868L16 13.1665C16 8.74822 12.4183 5.16648 7.99998 5.16648Z"
                                            />
                                        </svg>
                                        Ответить</a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                @empty
                    <h3 style="color: orange"> Сообщений пока нет </h3>
                @endforelse
            </div>
            <div class="questions__ask-form">
                <hr>
                <h2>Задать вопрос</h2>
                <form method="POST" action="{{route('questions.send')}}">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="room_id" value="{{$room->id}}">
                    <textarea placeholder="Поле для вопроса" name="message" id="" cols="30" rows="10" required></textarea>
                    @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <button type="submit" class="main-button main-button_yellow questions__ask-form-send ">Отправить
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M21.8927 0.107449C21.7926 0.00661525 21.6422 -0.0263847 21.5084 0.0220153L0.241722 7.72201C0.103122 7.77225 0.00778868 7.90095 0.000455342 8.04835C-0.00687799 8.19575 0.0748887 8.33325 0.207989 8.39742L7.86619 12.0732L14.7837 6.96008C14.9531 6.83505 15.1654 7.04735 15.04 7.21638L9.92722 14.1339L13.6031 21.7921C13.6643 21.9193 13.793 22 13.9334 22C13.9397 22 13.9455 22 13.9518 21.9996C14.0992 21.9919 14.2279 21.897 14.2785 21.7584L21.9785 0.491715C22.0265 0.357882 21.9931 0.207915 21.8927 0.107449Z"
                                  fill="white"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.questions__message-response-action a').on('click', function() {
                $('html').animate({
                    scrollTop: $('.questions__ask-form').offset().top
                }, 500);
                $('.questions__ask-form textarea').focus();
            });
        });

    </script>

@endsection
