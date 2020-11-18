<div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="requestModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content request-modal_black">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;right: 20px;top: 20px;">
                    <span aria-hidden="true">&times;</span>
                </button>
            <div class="modal-body">
                <form class="enter-form__form"  action="{{ route('fileModal') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="enter-form__title request-modal__title">Оставить заявку</div>

                    <div class="form-group">
                        <div class="msg-err-cont">
                            <div class="inner-addon">
                                <svg class="glyphicon" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.975 11.625C17.6625 10.4625 18.75 8.55 18.75 6.375C18.75 2.85 15.9 0 12.375 0C8.85 0 6 2.85 6 6.375C6 8.55 7.0875 10.4625 8.775 11.625C5.4375 12.675 3 15.825 3 19.5V24H21.75V19.5C21.75 15.825 19.3125 12.675 15.975 11.625ZM7.5 6.375C7.5 3.675 9.675 1.5 12.375 1.5C15.075 1.5 17.25 3.675 17.25 6.375C17.25 9.075 15.075 11.25 12.375 11.25C9.675 11.25 7.5 9.075 7.5 6.375ZM20.25 22.5H4.5V19.5C4.5 15.7875 7.5375 12.75 11.25 12.75H13.5C17.2125 12.75 20.25 15.7875 20.25 19.5V22.5Z"
                                          fill="#959393"/>
                                </svg>
                                <input class="enter-form__input classic-input form-control"
                                       type="text"
                                       id="fio"
                                       name="fio"
                                       placeholder="ФИО"
                                       required>
                            </div>
                        </div>
                    </div>

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
                                       id="email"
                                       name="email"
                                       type="text"
                                       placeholder="Email"
                                       required>
                                {{--                                либо телефон--}}
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <div class="msg-err-cont">
                                <div class="input-box">
                                    <input type="file"
                                           name="file"
                                           id="file"
                                           class="inputfile"/>
                                    <label for="file" class="enter-form__input classic-input form-control">
                                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M12 0.666687C12.7364 0.666687 13.3333 1.26364 13.3333 2.00002V16C13.3333 16.7364 12.7364 17.3334 12 17.3334H1.33333C0.596954 17.3334 0 16.7364 0 16V2.00002C0 1.26364 0.596954 0.666687 1.33333 0.666687H12ZM12 1.33335H1.33333C0.991443 1.33335 0.709662 1.59071 0.671152 1.92227L0.666667 2.00002V16C0.666667 16.3419 0.924027 16.6237 1.25559 16.6622L1.33333 16.6667H12C12.3419 16.6667 12.6237 16.4093 12.6622 16.0778L12.6667 16V2.00002C12.6667 1.65813 12.4093 1.37635 12.0777 1.33784L12 1.33335ZM4 19.3334C3.26362 19.3334 2.66667 18.7364 2.66667 18L3.33333 18C3.33333 18.3419 3.59069 18.6237 3.92225 18.6622L4 18.6667H14.6667C15.0086 18.6667 15.2903 18.4093 15.3288 18.0778L15.3333 18V4.00002C15.3333 3.65813 15.076 3.37635 14.7444 3.33784L14.6667 3.33335H14V2.66669H14.6667C15.403 2.66669 16 3.26364 16 4.00002V18C16 18.7364 15.403 19.3334 14.6667 19.3334H4ZM6.38892 5.94598V8.23612H3.94596C3.61185 8.23612 3.33333 8.50973 3.33333 8.84724C3.33333 9.1871 3.60761 9.45835 3.94596 9.45835H6.38892V12.0541C6.38892 12.3882 6.66252 12.6667 7.00003 12.6667C7.33989 12.6667 7.61114 12.3924 7.61114 12.0541V9.45835H10.054C10.3881 9.45835 10.6667 9.18474 10.6667 8.84724C10.6667 8.50737 10.3924 8.23612 10.054 8.23612H7.61114V5.94598C7.61114 5.61187 7.33753 5.33335 7.00003 5.33335C6.66017 5.33335 6.38892 5.60763 6.38892 5.94598Z"
                                                  fill="#959393"/>
                                        </svg>
                                        <span>Прикрепить файл</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <div class="msg-err-cont">
                                <div class="enter-form__remember-line">

                                    <div class="checkbox">
                                        <input class="custom-checkbox" type="checkbox" id="politics_agree" name="politics_agree">
                                        <label for="politics_agree"><a href="{{route('content',
                                        ['slug'=>'conf_politics'])}}" target="_blank">Политика конфиденциальности</a></label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    {{--                    <a href="#" class="main-button main-button_yellow request-modal__button">Отправить</a>--}}

                    <button type="submit" class=" main-button main-button_yellow request-modal__button">
                        Отправить
                    </button>
                    <br>
                    Вы можете <a id="question-trigger" class="request-modal__link" style="margin-left: 0" href="{{route('questions')}}">задать
                        вопрос
                        консультанту</a> <a href="{{route('login')}}" class="request-modal__link">Войти</a>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#question-trigger').click(function () {
        //показать что вопрос в этом окне может мигание
    });
</script>

<script type="text/javascript">
    //validation
    $.validator.setDefaults({
        submitHandler: function () {
        }
    });

    $(document).ready(function () {
        $("#requestModalForm").validate({
            rules: {
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                },
                politics_agree: "required",
            },
            messages: {
                fio: "Заполните поле ФИО",
                // password: {
                //     required: "Введите пароль",
                //     minlength: "Ваш пароль дожен быть не менее 5 символов"
                // },
                required: "это поле требуется заполнить",
                email: "Введите правильный е-mail адрес",
                politics_agree: "Ознакомьтесь с политикой конфиденциальности",

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
