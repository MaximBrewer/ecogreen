@extends('layouts.cabinet')

@section('cabinet_content')
    <div class="cabinet-container">
        <div class="cabinet__top-h">
            <div class="breadcrubms">
                <a href="/">Главная</a>
                /
                <a href="/cabinet/profile">Личный кабинет</a>
            </div>
            <h2 class="main_grey-text text-page__top-h">Персональные данные</h2>
        </div>
    </div>
    <div class="cabinet-container">
        <div class="profile">
            @include('elements.profile_info')
            <form class="profile__form"  action="{{ route('update') }}" method="POST"  >
                @csrf
                <div class="great-form">
                    <div class="great-form-top great-form-profile">
                        <div class="great-form-item">
                            <label for="name">Имя
                                <div class="msg-err-cont"></div>
                            </label>
                            <input class="classic-input"
                                   name="name"
                                   type="text"
                                   required
                                   placeholder="Введите Имя"
                                   value="{{ $getItem->name }}"
                                   id="name">
                        </div>
                        <div class="great-form-item">
                            <label for="organization">Наименование организации или ип
                                <div class="msg-err-cont"></div>
                            </label>

                            <input class="classic-input"
                                   name="organization"
                                   type="text"
                                   placeholder="Введите наименование организации или ип"
                                   value="{{ $getItem->name_organization }}"
                                   id="organization">
                        </div>
                        <div class="great-form-item">
                            <label for="username">Имя Пользователя
                                <div class="msg-err-cont"></div>
                            </label>

                            <input class="classic-input"
                                   name="user_name"
                                   type="text"
                                   placeholder="Введите имя пользователя"
                                   value="{{ $getItem->username }}"
                                   id="username">

                        </div>
                        <div class="great-form-item">
                            <label for="inn">ИНН
                                <div class="msg-err-cont"></div>
                            </label>

                            <input class="classic-input"
                                   name="inn"
                                   type="number"
                                   placeholder="Введите ИНН"
                                   value="{{ $getItem->inn }}"
                                   id="inn">

                        </div>
                        <div class="great-form-item">
                            <label for="email">Почта
                                <div class="msg-err-cont"></div>
                            </label>
                            <input class="classic-input"
                                   name="email"
                                   type="text"
                                   required
                                   placeholder="Введите почту"
                                   value="{{ $getItem->email }}"
                                   id="email">
                        </div>
                        <div class="great-form-item">
                            <label for="address">Адрес
                                <div class="msg-err-cont"></div>
                            </label>

                            <input class="classic-input"
                                   name="address"
                                   type="text"
                                   placeholder="Введите Адрес"
                                   value="{{ $getItem->address }}"
                                   id="address">
                        </div>
                        <div class="great-form-item">
                            <label for="phone">Телефон<div class="msg-err-cont"></div></label>
                                <input class="classic-input"
                                       name="phone"
                                       type="number"
                                       placeholder="Введите Телефон"
                                       value="{{ $getItem->phone }}"
                                       id="phone">
                        </div>
                        <div class="great-form-item">
                            <!-- Custom select structure -->
                            <label for="select_city">Город

                            </label>
                            @php
                                $array=[
                                    'Москва','Новосибирск','Екатеринбург','Омск','Челябинск'
                                ];
                            @endphp
                            <div class="select_mate usual-select " data-mate-select="active" style="border-radius: 6px;" id="select_city">
                                <select name="city" onchange="" class="" id="select_city" >
                                    <option value="">Выберите Город</option>
                                    @foreach($array as $key=>$item)
                                        <option {{ ($getItem->city===($key)) ? 'selected' : ''}}  value="{{ $key }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                                <p class="selecionado_opcion" onclick="open_select(this)"></p><span
                                    onclick="open_select(this)" class="icon_select_mate">
                                    <svg fill="#000000" height="24"
                                         viewBox="0 0 24 24"
                                         width="24"
                                         xmlns="http://www.w3.org/2000/svg">
    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
    <path d="M0-.75h24v24H0z" fill="none"/>
</svg></span>
                                <div class="cont_list_select_mate">
                                    <ul class="cont_select_int"></ul>
                                </div>

                            </div>

                            <!-- Custom select structure -->
                        </div>
                        <div class="great-form-item">
                            <label for="d_address">Адрес доставки<div class="msg-err-cont"></div></label>
                                <input class="classic-input"
                                       name="d_address"
                                       type="text"
                                       placeholder="Введите Адрес доставки"
                                       value="{{ $getItem->billing_address }}"
                                       id="d_address">
                        </div>
                    </div>
                    <div class="multistep-actions great-form-actions">
                        <button type="submit" class="not-button main-button main-button_yellow">Сохранить
                        </button>
                </form>
                        <a href="{{ route('cabinet.profile') }}" class="main-button main-button_yellow product__info-block__black-button">Вернуться
                            к изменениям</a>
                        <a type="button"href="#" class="main-button main-button_yellow product__info-block__black-button" data-toggle="modal" data-target="#parolModal">Изменить пароль</a>
                    </div>
                </div>


        </div>
    </div>
<!-- Button trigger modal -->


  <!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('profile_image')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Измените изображение профиля</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <img class="img-rounded img-thumbnail" src="{{asset('storage/'.$getItem->avatar)}}" alt="user-avatar">
                    <div class="form-group pretty-file-selector">
                        <input class="form-control-file d-none" type="file" name="img" >
                        <button type="button" id="btn_click" class="btn btn-outline-warning align-center w-80 btn-block">
                            <i class="fa fa-image"></i> @lang('Выбор изображения')
                        </button>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn-secondary" data-dismiss="modal">Закрыть</button>
                  <button type="submit" class="not-button main-button main-button_yellow"  style="padding: .375rem .75rem;
                  font-size: 1rem;
                  line-height: 1.5;
                  width: auto;
                  border: 1px solid transparent;">Сохранить</button>
                </div>
              </div>
        </form>
    </div>
</div>
  <!-- Modal -->

<div class="modal fade" id="parolModal" tabindex="-2" role="dialog" aria-labelledby="parolModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('cabinet.password_update') }}" method="POST" >
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Изменить пароль</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="great-form-item">
                            <label for="old_password">Текущий пароль
                                <div class="msg-err-cont"></div>
                            </label>

                            <input class="classic-input"
                                   name="old_password"
                                   type="password"
                                   required
                                   placeholder="Введите пароль"
                                   id="old_password">

                        </div>
                        <div class="great-form-item">
                            <label for="password">Новый пароль
                                <div class="msg-err-cont"></div>
                            </label>

                            <input class="classic-input"
                                   name="password"
                                   type="password"
                                   required
                                   placeholder="Введите пароль"
                                   id="password">

                        </div>
                        <div class="great-form-item">
                            <label for="password_confirmation">Повторный пароль
                                <div class="msg-err-cont"></div>
                            </label>

                            <input class="classic-input"
                                   name="password_confirmation"
                                   type="password"
                                   required
                                   placeholder="Введите пароль"
                                   id="password_confirmation">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                  <button type="submit" class="not-button main-button main-button_yellow" style="padding: .375rem .75rem;
                  font-size: 1rem;
                  line-height: 1.5;
                  width: auto;
                  border: 1px solid transparent;">Сохранить</button>
                </div>
              </div>
        </form>
    </div>
</div>
    <script type="text/javascript">
        //validation
        $.validator.setDefaults({
            submitHandler: function () {
            }
        });

        $(document).ready(function () {
            $("#profileForm").validate({
                rules: {
                    pr_name: {
                        required: true,
                    },
                    pr_email: {
                        required: true,
                        email: true
                    },
                    pr_city: {
                        required: true,
                    },
                    pr_password: {
                        required: true,
                    },
                    pr_ip: {
                        required: true,
                    },
                    pr_inn: {
                        required: true,
                    },
                    pr_adress: {
                        required: true,
                    },
                    pr_adress_del: {
                        required: true,
                    },
                },
                messages: {
                    email: "Введите правильный е-mail адрес",
                    pr_name: {
                        required: "Введите имя",
                    },
                    pr_city: {
                        required: "Введите город",
                    },
                    pr_email: {
                        email: "Введите правильный е-mail адрес",
                        required: "Введите е-mail адрес",
                    },
                    pr_password: {
                        required: "Введите пароль",
                    },
                    pr_ip: {
                        required: "Введите ип",
                    },
                    pr_inn: {
                        required: "Введите инн",
                    },
                    pr_adress: {
                        required: "Введите адрес",
                    },
                    pr_adress_del: {
                        required: "Введите адрес доставки",
                    },
                    register_required: "это поле требуется заполнить",
                },
                errorElement: "div",
                errorPlacement: function (error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block");

                    if (element.prop("type") === "checkbox") {
                        error.insertBefore(element.parents(".msg-err-cont"));
                    } else {
                        error.insertBefore(element.parents(".msg-err-cont"));
                    }
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass("has-error").removeClass("has-success");
                    $(element).closest(".select_mate").addClass("has-error").removeClass("has-success");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).addClass("has-success").removeClass("has-error");
                    $(element).closest(".select_mate").addClass("has-success").removeClass("has-error");
                }
            });

        });
    </script>
@endsection
