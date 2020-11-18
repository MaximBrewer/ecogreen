@extends('layouts.site')

@section('content')
    <? if (!isset($active)) {
        $active = "";
    }  ?>

    <div class="container">
        <div class="breadcrubms">
            <a href="/">Главная</a>
            /
            <a href="/cabinet/login">Вход</a>
        </div>
        <div class="enter-form-wrapper">
            <div class="enter-form">
                <div class="enter-form__title">Войти</div>
                <br>
                <div class="enter-form__subtitle">Войдите в систему прямо сейчас, чтобы работу</div>
                <br>
                <form class="enter-form__form" id="loginForm">
                    <div class="form-group">
                        <div class="msg-err-cont">
                    <input class="enter-form__input classic-input form-control email-masked"
                           id="login_email"
                           name="login_email"
                           type="text"
                           placeholder="Email"
                           required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="msg-err-cont">
                            <input type="password"
                                   class="enter-form__input classic-input form-control"
                                   id="login_password"
                                   name="login_password"
                                   placeholder="Пароль"
                                   required>
                        </div>
                    </div>

                    <div class="enter-form__remember-line">
                        <div>
                            <div class="checkbox">
                                <input class="custom-checkbox" type="checkbox" id="login_remember" name="login_remember">
                                <label for="login_remember">Запомни меня</label>
                            </div>
                        </div>
                        <a href="#!">Забыли пароль?</a>
                    </div>
                    <button type="submit" class="not-button main-button main-button_yellow">Войти
                    </button>
                    <br>
                    У вас еще нет аккаунта? <a href="/cabinet/register"
                                               class="enter-form_green-link">Зарегестрироваться</a>
                </form>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        //validation
        $.validator.setDefaults({
            submitHandler: function () {
            }
        });

        $(document).ready(function () {
            $("#loginForm").validate({
                rules: {
                    login_password: {
                        required: true,
                    },
                    login_email: {
                        required: true,
                        email: true
                    },
                },
                messages: {
                    login_password: {
                        required: "Введите пароль",
                    },
                    login_required: "это поле требуется заполнить",
                    login_email: "Введите ваш е-mail адрес",
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
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).addClass("has-success").removeClass("has-error");
                }
            });

        });
    </script>
@endsection
