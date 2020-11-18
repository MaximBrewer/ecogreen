@extends('layouts.site')

@section('content')
    <? if (!isset($active)) {
        $active = "";
    }  ?>

    <div class="container">
        <div class="breadcrubms">
            <a href="/">Главная</a>
            /
            <a href="/cabinet/register">Регистрация</a>
        </div>
        <div class="enter-form-wrapper">
            <div class="enter-form">
                <div class="enter-form__title">Регистрация</div>
                <br>
                <div class="enter-form__subtitle">Для того что бы продолжить покупки, вам необходимо
                    зарегистрироваться
                </div>
                <br>
                <form id="registerForm" method="post" class="enter-form__form form-horizontal" action=""
                      novalidate="novalidate">
                    <div class="form-group">
                        <div class="msg-err-cont">
                            <div class="inner-addon">
                                <svg class="glyphicon" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M19.9805 4.78212C19.9935 4.80895 20 4.83578 20 4.86261V15.2461C20 15.7827 19.8698 16.2925 19.6094 16.7755C19.349 17.2584 18.9583 17.4999 18.4375 17.4999H2.1875C1.66666 17.4999 1.17188 17.2584 0.703125 16.7755C0.234373 16.2925 0 15.7827 0 15.2461V4.86261C0 4.83578 0.00651045 4.80895 0.0195313 4.78212C-0.00651045 4.68821 -0.00651045 4.59765 0.0195313 4.51045C0.0455731 4.42325 0.0911456 4.33941 0.15625 4.25891C0.169271 4.2455 0.182292 4.22873 0.195313 4.20861C0.208333 4.18848 0.227865 4.17171 0.253906 4.1583C0.44922 3.88999 0.72591 3.68541 1.08398 3.54454C1.44206 3.40368 1.80989 3.33325 2.1875 3.33325H18.4375C18.8542 3.33325 19.1895 3.42381 19.4434 3.60491C19.6973 3.78602 19.8633 4.05768 19.9414 4.4199C19.9674 4.47356 19.9837 4.53058 19.9902 4.59095C19.9967 4.65132 19.9935 4.71504 19.9805 4.78212ZM1.89453 4.62122C1.79036 4.62122 1.6862 4.62793 1.58203 4.64134L10 11.5637L18.4375 4.62122H1.89453ZM18.4375 16.212C18.6068 16.212 18.7012 16.0946 18.7207 15.8598C18.7402 15.625 18.75 15.4204 18.75 15.246V6.02966L10.4102 12.8916C10.3451 12.9453 10.2799 12.9855 10.2148 13.0124C10.1497 13.0392 10.0781 13.0526 10 13.0526C9.92187 13.0526 9.85026 13.0392 9.78516 13.0124C9.72005 12.9855 9.65495 12.9453 9.58984 12.8916L1.25 6.02966V15.246C1.25 15.4204 1.36393 15.625 1.5918 15.8598C1.81966 16.0946 2.01823 16.212 2.1875 16.212H18.4375Z"
                                          fill="#959393"/>
                                </svg>
                                <input class="enter-form__input classic-input form-control email-masked"
                                       id="register_email"
                                       name="register_email"
                                       type="text"
                                       placeholder="Email"
                                       required>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="msg-err-cont">
                            <input type="password" class="enter-form__input classic-input form-control" id="register_password"
                                   name="register_password" placeholder="Пароль" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="msg-err-cont">
                            <input type="password" class="enter-form__input classic-input form-control"
                                   id="register_confirm_password"
                                   name="register_confirm_password"
                                   placeholder="Подтвердить пароль">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <div class="msg-err-cont">
                                <div class="enter-form__remember-line">

                                    <div class="checkbox">
                                        <input class="custom-checkbox"
                                               type="checkbox"
                                               id="register_agree"
                                               name="register_agree"
                                               value="register_agree">
                                        <label for="register_agree">Согласие на обработку персональных данных</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="not-button main-button main-button_yellow">Зарегистрироваться
                        </button>
                        <br>
                        У вас есть аккаунт? <a href="/cabinet/login" class="enter-form_green-link">Войти</a>

                        {{--                        <div class="col-sm-9 col-sm-offset-4">--}}
                        {{--                            <button type="submit" class="btn btn-primary" name="signup1" value="Sign up">Sign up</button>--}}
                        {{--                        </div>--}}
                    </div>
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
            $("#registerForm").validate({
                rules: {
                    register_password: {
                        required: true,
                        minlength: 5
                    },
                    register_confirm_password: {
                        required: true,
                        minlength: 5,
                        equalTo: "#register_password"
                    },
                    register_email: {
                        required: true,
                        email: true
                    },
                    register_agree: "required",
                },
                messages: {
                    // firstname: "Please enter your firstname",
                    // lastname: "Please enter your lastname",
                    // username: {
                    //     required: "Please enter a username",
                    //     minlength: "Your username must consist of at least 2 characters"
                    // },

                    register_password: {
                        required: "Введите пароль",
                        minlength: "Ваш пароль дожен быть не менее 5 символов"
                    },
                    register_confirm_password: {
                        required: "Подтвердите пароль",
                        minlength: "Ваш пароль дожен быть не менее 5 символов",
                        equalTo: "Пароли должны совпадать"
                    },
                    register_required: "это поле требуется заполнить",
                    register_email: "Введите правильный е-mail адрес",
                    register_agree: "Подтвердите согласие на обработку персональных данных"
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
