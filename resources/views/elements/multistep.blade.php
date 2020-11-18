<!-- MultiStep Form -->
@php
    $i=0;
@endphp
<style>
    .quantity{
        max-width: 3rem;
        border-radius: 3px;
        background: none;
        border: 1px solid #212529;
        text-align:center;
    }
</style>
<div id="msform">
    {{--чек--}}
    <fieldset>
        <form class="nextForm" id="orderCheck">
            <div class="scroll-wrapper">
                <table class="basket__info-table">
                    <tr class="basket__info-table-header">
                        <th>Товар</th>
                        <th>Фасовка</th>
                        <th>Количество</th>
                        <th class="price-t">Цена за л/кг</th>
                        <th>Сумма</th>
                        <th>Удалить</th>
                    </tr>
                    <input type="hidden" value="" id="selected_id_row">
                    @foreach($items as $index=>$item)
                    <tr>
                        <td><span class="bold-title">{{$item->name}}</span><br>
                            <div class="fade-desc">ДВ: {{ \App\Models\Product::findOrFail($item->id)->getActiveSubstance->name}}</div>
                        </td>
                        <td>
                            <div class="bold-title vertical-switcher-container">
                                <div class="vertical-switcher" data-type="packing">
                                    <select class="packing" data-index="{{++$i}}" value="{{$item->attributes->packing}}" style="display:none;"
                                        data-url="{{(\Auth::user())?route('cart.update', $item->id):route('cart.guest.update', $item->id)}}">
                                        @foreach ($item->model->getPacking()->orderBy('name', 'ASC')->get() as $packing)
                                            <option value="{{ $packing->name }}">{{ $packing->name }}</option>
                                        @endforeach
                                    </select>
                                    <a href="#" class="vertical-switcher__arrow vertical-switcher__arrow-left"></a>
                                    <span><span class="vertical-switcher-val">{{ $item->attributes->packing}}</span>{{(\Auth::user()) ? $item['associatedModel']['pack_type'] : $item->model->pack_type}}</span>
                                    <a href="#" class="vertical-switcher__arrow vertical-switcher__arrow-right"></a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <input type="number" value="{{$item->quantity}}" class="quantity" data-url="{{(\Auth::user())?route('cart.update', $item->id):route('cart.guest.update', $item->id)}}" data-index="{{$i}}">
                        </td>
                        <td class="price-t">
                            <span class="bold-title">₽ {{ (\Auth::user()) ? $item['associatedModel']['price'] : $item->model->price }}</span>
                        </td>
                        <td class="price-t">
                            <div class="price-box">
                                <div class="price-box__container price-box__container-md">
                                    <span>₽ {{$item->getPriceSumWithConditions()}}</span>
                                    <div>в том числе НДС<div class="nds">{{ \App\Services\HelperService::presentPrice($item->attributes->nds) }}</div></div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <label type="button" class="cart_remove btn" data-url="{{ (\Auth::user())?route('cart.delete',['id'=> $item->id]):route('cart.guest.delete',['id'=> $item->id]) }}">
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    <path fill-rule="evenodd" d="M6.646 5.646a.5.5 0 0 1 .708 0L8.5 6.793l1.146-1.147a.5.5 0 0 1 .708.708L9.207 7.5l1.147 1.146a.5.5 0 0 1-.708.708L8.5 8.207 7.354 9.354a.5.5 0 1 1-.708-.708L7.793 7.5 6.646 6.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </label>
                        </td>
                    </tr>
                    @endforeach
                    <tr class="bordered-tr">
                        <td align="left" colspan="4">
                            * при заказе большого объёма мы предоставляем персональную скидку на весь ассортимент
                        </td>
                        <td align="right" colspan="2">
                            <div class="price-box">
                                Сумма заказа:
                                <div class="price-box__container price-box__container-sm">
                                    <span>₽ {{$total}}</span>
                                    <div>в т.ч. НДС <div class="nds">{{  \App\Services\HelperService::presentPrice($ndsTotal) }}</div></div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="multistep-actions">
                <button type="button"
                        class="not-button
                            main-button
                            main-button_yellow
                            basket__info-button
                            next">Далее
                </button>
            </div>
        </form>
    </fieldset>
    {{--выбор контактов--}}
    <fieldset>
        <div class="contact-select" data-selected="">
            <div id="np" class="contact-select__item">
                Физ. лицо
            </div>
            <div id="entity" class="contact-select__item">
                Организация/ИП
            </div>
        </div>
        <form id="contactNp"  class="nextForm select-np" >
            <div class="multistep-item-title">Контактная информация <span>Физ. лицо</span>
            </div>
            {{-- for check user_type --}}
            <input value="np" name="user_type" type="hidden">

            <div class="great-form">
                <div class="great-form-top">
                    <div class="great-form-item">
                        <label for="np_name">Имя</label>
                        <input class="classic-input" onchange="checkNpFields()" value="{{(auth()->user()->name)??''}}" name="np_name" type="text" required placeholder="Введите Имя">
                    </div>
                    <div class="great-form-item">
                        <label for="np_adress">Адрес</label>
                        <input class="classic-input" onchange="checkNpFields()" value="{{(auth()->user()->billing_address)??''}}" name="np_adress" type="text" required placeholder="Введите адрес">
                    </div>
                    <div class="great-form-item">
                        <label for="np_email">Почта</label>
                        <input class="classic-input email-masked" onchange="checkNpFields()" value="{{(auth()->user()->email)??''}}" name="np_email" type="email" required placeholder="Введите почту">
                    </div>
                    <div class="great-form-item">
                        <label for="np_phone">Телефон</label>
                        <input class="classic-input phone-masked" onchange="checkNpFields()" value="{{(auth()->user()->phone)??''}}" name="np_phone" type="text" required placeholder="Введите Телефон">
                    </div>
                </div>
                <div class="great-form-bottom">
                    <div class="great-form-item">
                        <label for="np_comment">Комментарий</label>
                        <textarea id="" cols="30" rows="10" name="np_comment" onchange="checkNpFields()"
                                  type="text" class="classic-input" placeholder="Комментарий"></textarea>
                    </div>
                </div>
            </div>
        </form>
        <form id="contactEntity" class="nextForm select-entity">
            <div class="multistep-item-title">Контактная информация <span>Юридическое лицо</span></div>
            {{-- for check user_type --}}
            <input value="entity" name="user_type" type="hidden">

            <div class="great-form">
                <div class="great-form-top">
                    <div class="great-form-item">
                        <label for="ent_name">Имя</label>
                        <input class="classic-input"
                                onchange="checkEntityFields()"
                               value="{{(auth()->user()->name)??''}}"
                               name="ent_name"
                               type="text"
                               required
                               placeholder="Введите Имя">
                    </div>
                    <div class="great-form-item">
                        <label for="ent_adress">Адрес</label>
                        <input class="classic-input"
                                onchange="checkEntityFields()"
                               value="{{(auth()->user()->billing_address)??''}}"
                               name="ent_adress"
                               type="text"
                               required
                               placeholder="Введите адрес">
                    </div>
                    <div class="great-form-item">
                        <label for="ent_email">Почта</label>
                        <input class="classic-input email-masked"
                                onchange="checkEntityFields()"
                               value="{{(auth()->user()->email)??''}}"
                               name="ent_email"
                               type="email"
                               required
                               placeholder="Введите почту">
                    </div>
                    <div class="great-form-item">
                        <label for="ent_phone">Телефон</label>
                        <input class="classic-input phone-masked"
                                onchange="checkEntityFields()"
                               value="{{(auth()->user()->phone)??''}}"
                               name="ent_phone"
                               type="text"
                               required
                               placeholder="Введите Телефон">
                    </div>
                    <div class="great-form-item">
                        <label for="ent_inn">ИНН</label>
                        <input class="classic-input"
                                onchange="checkEntityFields()"
                               value="{{(auth()->user()->inn)??''}}"
                               name="ent_inn"
                               type="number"
                               required
                               placeholder="Введите инн">
                    </div>
                    <div class="great-form-item">
                        <label for="ent_org">Наименование организации</label>
                        <input class="classic-input"
                                onchange="checkEntityFields()"
                               value="{{(auth()->user()->name_organization)??''}}"
                               name="ent_org"
                               type="text"
                               required
                               placeholder="Введите название организации">
                    </div>
                    <div class="input-box">
                        <input type="file"
                               name="ent_file"
                               id="ent_file"
                               class="inputfile"
                               data-multiple-caption="({count}) выбрано" multiple />
                        <label for="ent_file" class="enter-form__input">
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0.666687C12.7364 0.666687 13.3333 1.26364 13.3333 2.00002V16C13.3333 16.7364 12.7364 17.3334 12 17.3334H1.33333C0.596954 17.3334 0 16.7364 0 16V2.00002C0 1.26364 0.596954 0.666687 1.33333 0.666687H12ZM12 1.33335H1.33333C0.991443 1.33335 0.709662 1.59071 0.671152 1.92227L0.666667 2.00002V16C0.666667 16.3419 0.924027 16.6237 1.25559 16.6622L1.33333 16.6667H12C12.3419 16.6667 12.6237 16.4093 12.6622 16.0778L12.6667 16V2.00002C12.6667 1.65813 12.4093 1.37635 12.0777 1.33784L12 1.33335ZM4 19.3334C3.26362 19.3334 2.66667 18.7364 2.66667 18L3.33333 18C3.33333 18.3419 3.59069 18.6237 3.92225 18.6622L4 18.6667H14.6667C15.0086 18.6667 15.2903 18.4093 15.3288 18.0778L15.3333 18V4.00002C15.3333 3.65813 15.076 3.37635 14.7444 3.33784L14.6667 3.33335H14V2.66669H14.6667C15.403 2.66669 16 3.26364 16 4.00002V18C16 18.7364 15.403 19.3334 14.6667 19.3334H4ZM6.38892 5.94598V8.23612H3.94596C3.61185 8.23612 3.33333 8.50973 3.33333 8.84724C3.33333 9.1871 3.60761 9.45835 3.94596 9.45835H6.38892V12.0541C6.38892 12.3882 6.66252 12.6667 7.00003 12.6667C7.33989 12.6667 7.61114 12.3924 7.61114 12.0541V9.45835H10.054C10.3881 9.45835 10.6667 9.18474 10.6667 8.84724C10.6667 8.50737 10.3924 8.23612 10.054 8.23612H7.61114V5.94598C7.61114 5.61187 7.33753 5.33335 7.00003 5.33335C6.66017 5.33335 6.38892 5.60763 6.38892 5.94598Z" fill="#959393"/>
                            </svg>
                            <span>Прикрепить реквизиты</span>
                        </label>
                    </div>
                </div>
                <div class="great-form-bottom">
                    <div class="great-form-item">
                        <label for="ent-comment">Комментарий</label>
                        <textarea id=""
                                  cols="30"
                                  rows="10"
                                  name="ent_comment"
                                  type="text"
                                  class="classic-input"
                                  placeholder="Комментарий"></textarea>
                    </div>
                </div>
            </div>
        </form>
        <div class="multistep-actions">
            <input type="button"
                    name="previous"
                    class="previous basket__info-button
                    action-button-previous
                    main-button_yellow
                    product__info-block__black-button"
                    value="Назад"/>
            <button type="button"
                    id="next-button__customer_type"
                    style="display:none;"
                    class="not-button
                    main-button
                    main-button_yellow
                    basket__info-button
                    next-validate">Далее
            </button>
        </div>

    </fieldset>
    {{--выбор оплаты заказа--}}
    <fieldset>
        <div class="multistep-item-title">Желаемая форма оплаты</div>
        <form action="#" class="nextForm">
            <div class="basket__payment" data-selected="">
                <div class="payment-entity" style="display:none;">
                    <div class="basket__payment-item">
                        <div class="basket__payment-item-text">
                            <div  data-toggle="tooltip" data-html="true" title="{!! nl2br(e(setting('site.payment_50'))) !!}">Оплата частями<span>?</span></div>
                            <p><b class="value_method"><span class="value">50/50</span></b></p>
                        </div>
                        <div class="basket__payment-item-circle">
                            <div class="diagram progress" data-percent="50">
                                <div class="piece left"></div>
                                <div class="piece right"></div>
                                <div class="text">
                                    <div>
                                        <b>50%</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="basket__payment-item">
                        <div class="basket__payment-item-text">
                            <div data-toggle="tooltip" data-html="true" title="{!! nl2br(e(setting('site.payment_75'))) !!}">Оплата частями<span>?</span></div>
                            <p><b class="value_method"><span class="value">70/30</span></b></p>
                        </div>
                        <div class="basket__payment-item-circle">
                            <div class="diagram progress" data-percent="70">
                                <div class="piece left"></div>
                                <div class="piece right"></div>
                                <div class="text">
                                    <div>
                                        <b>70%</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="basket__payment-item">
                        <div class="basket__payment-item-text">
                            <div  data-toggle="tooltip" data-html="true" title="{!! nl2br(e(setting('site.payment_100'))) !!}">Полная оплата<span>?</span></div>
                            <p><b class="value_method"><span class="value">100%</span></b></p>
                        </div>
                        <div class="basket__payment-item-circle">
                            <div class="diagram progress" data-percent="100">
                                <div class="piece left"></div>
                                <div class="piece right"></div>
                                <div class="text">
                                    <div>
                                        <b>100%</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="payment-np" style="display:none;">
                    <div class="basket__payment-item">
                        <div class="basket__payment-item-text">
                            <p><b>Оплата по счету<span class="value" style="display:none;">1</span></b></p>
                        </div>
                    </div>
                    <div class="basket__payment-item">
                        <div class="basket__payment-item-text">
                            <p><b>Оплата наличными при получении<span class="value" style="display:none;">2</span></b></p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="multistep-actions">
            <input type="button" name="previous"
                    class="previous basket__info-button action-button-previous main-button_yellow product__info-block__black-button"
                    value="Назад"/>
                    <button type="button" 
                    id="buttonPaymentNext"
                    style="display:none;"
                    class="not-button
                            main-button
                            main-button_yellow
                            basket__info-button
                            next">Далее
                    </button>
        </div>
    </fieldset>
    {{--Оплата заказа--}}
    {{--выбор оплаты заказа--}}
    <fieldset>
        <form action="#" class="nextForm delivery">
            <div class="multistep-item-title">Вид доставки</div>
            <div class="basket__delivery" data-selected="">
                <div>
                    <div class="basket__delivery-item">
                        <div class="basket__delivery-item-text">
                            <div>Самовывоз<span class="value" style="display:none;">1</span></div>
                        </div>
                    </div>
                    <div class="basket__delivery-item">
                        <div class="basket__delivery-item-text">
                            <div>Доставка до двери<span class="value" style="display:none;">2</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="multistep-actions">
                <input type="button" name="previous"
                       class="previous basket__info-button action-button-previous main-button_yellow product__info-block__black-button"
                       value="Назад"/>
                       <button type="button" id="buttonDeliveryNext" 
                       style="display:none;"
                       class="not-button
                               main-button
                               main-button_yellow
                               basket__info-button
                               next">Далее
                       </button>
            </div>
        </form>
    </fieldset>
    {{--Оплата заказа--}}
    <fieldset>
        <form action="#" >
            <div class="multistep-actions">
                <input type="button"
                       name="previous"
                       class="previous
                       basket__info-button
                       action-button-previous
                       main-button_yellow
                       product__info-block__black-button"
                       value="Назад"/>
                <button type="submit"
                        class="not-button
                        main-button
                        main-button_yellow
                        basket__info-button
                        next">Подтвердить
                </button>
            </div>
        </form>
    </fieldset>
</div>
<!-- /.MultiStep Form -->
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
<script type="text/javascript">
    //валидация для физлиц
    $("#contactNp").validate({
        submitHandler: function() {

        },
        rules: {
            np_name: {
                required: true,
            },
            np_email: {
                required: true,
                email: true,
            },
            np_phone: {
                required: true,
            },
            np_adress: {
                required: true,
            },

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
</script>

<script type="text/javascript">
    //валидация для юрлиц
    $("#contactEntity").validate({
        rules: {
            ent_name: {
                required: true,
            },
            ent_email: {
                required: true,
                email: true,
            },
            ent_phone: {
                required: true,
            },
            ent_adress: {
                required: true,
            },
            ent_inn: {
                required: true,
                number: true,
            },
            ent_org: {
                required: true,
            },
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

</script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches
    let pBarLi = $("#progressbar li");
    let currentBarWidth = $('.basket__timeline-line').width();
    let indexLi = $("fieldset").index(current_fs);

    $('.basket__timeline-done').css({
        'width': (currentBarWidth / 5),
    });

    //изменение прогрессбара

    function changePB(indexLi) {
        currentBarWidth = $('.basket__timeline-line').width();
        $('.basket__timeline-done').css({
            'width': (currentBarWidth / 5) + (currentBarWidth / 5) * (indexLi),
        });
    }

    // $(window).resize(function(){
    //     changePB(current_fs);
    // });


    //сам мультистеп


    var buttonNext = function(elem){

        if( !elem.checkValidity() ) {
            return false;
        }
        if (animating) return false;
        animating = true;

        current_fs = $(elem).closest('fieldset');
        next_fs = $(elem).closest('fieldset').next();

        //for redirect user is guest to login
        var isUser = '{{\Auth::check()}}';
        var login_url = '{{route("cart.index")}}';

        if($("fieldset").index(next_fs) == 1 && !isUser){
            window.location.href = login_url;
            return false;
        }



        $('.payment-np').hide();
        $('.payment-entity').hide();
        var user_type = $('.contact-select').data("selected");
        if (user_type === 'np'){
            $('.payment-np').show();
        }else if(user_type === 'entity'){
            $('.payment-entity').show();
        }


        //activate next step on progressbar using the index of next_fs
        pBarLi.removeClass("active-step");
        pBarLi.eq($("fieldset").index(next_fs)).addClass("active-step");
        indexLi = $("fieldset").index(next_fs);
        changePB(indexLi);
        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50) + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    // 'transform': 'scale(' + scale + ')',
                    'position': 'absolute'
                });
                next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 1,
            complete: function () {
                current_fs.hide();
                animating = false;
                //заказ на 4 шаге можем оформить
                if(indexLi == 4) {
                    $('.multistep-actions').hide();
                    $('#makeOrder').removeClass('main-button_yellow-disabled');
                }
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });

    }

    $("button.next-validate").click(function (e) {
        e.preventDefault();
        spinner.show();
        var formObjects ={};
        var contactNp = {};
        var contactEntity = {};

        var user_type = $('.contact-select').data("selected");

        if (user_type === 'np'){
            contactNp = getFormObj('contactNp');
        }else if(user_type === 'entity'){
            contactEntity = getFormObj('contactEntity');
            UploadEntFilesWithFormData();
        }
        formObjects = Object.assign(contactNp,contactEntity);

        var that = this;
        
        $.ajax({
            type: 'POST',
            url: '{{route("checkout.validate")}}',
            dataType: "JSON",
            data: formObjects,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
            success: function (data) {
                spinner.hide();
                console.log(data);
                if(data.errors){
                    toastr.error(data.message);
                }else{
                    buttonNext(that);
                }
            },
            error: function (data) {
                spinner.hide();
                console.log(data);
                if(data.responseJSON.message)
                    toastr.error(data.responseJSON.message);
                else if(data.responseJSON.errors){
                    for(errors of Object.values(data.responseJSON.errors)) for(error of errors) toastr.error(error);
                }
            }
        });
    });


    $("button.next").click(function (e) {
        e.preventDefault();
        buttonNext(this);
    });


    $(".previous").click(function () {

        // console.log(indexLi);

        if (animating) return false;
        animating = true;

        current_fs = $(this).closest('fieldset');
        previous_fs = $(this).closest('fieldset').prev();

        //de-activate current step on progressbar
        pBarLi.removeClass("active-step");
        pBarLi.eq($("fieldset").index(previous_fs)).addClass("active-step");

        indexLi = $("fieldset").index(previous_fs);
        changePB(indexLi);
        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1 - now) * 50) + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                //'transform': 'scale(' + scale + ')',
                previous_fs.css({'position': 'initial' ,'opacity': opacity});
            },
            duration: 1,
            complete: function () {
                current_fs.hide();
                animating = false;
                //прячем выбор юр лица и физ открываем опции выбора если не заполнен 2 шаг
                console.log(indexLi);
                if(indexLi == 0 ) {
                    $('.contact-select').show();
                    $('.select-entity').hide();
                    $('.select-np').hide();
                }
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });
    $(".submit").click(function () {
        return false;
    });

    //circleprogress для заполнения кругов
    function progressView() {
        let diagramBox = document.querySelectorAll('.diagram.progress');
        diagramBox.forEach((box) => {
            let deg = (360 * box.dataset.percent / 100) + 180;
            if (box.dataset.percent >= 50) {
                box.classList.add('over_50');
            } else {
                box.classList.remove('over_50');
            }
            box.querySelector('.piece.right').style.transform = 'rotate(' + deg + 'deg)';
        });
    }

    progressView();

    $(document).ready(function() {
        var qty = $(".quantity");
        var packing = $(".packing");
        var cart_remove = (".cart_remove.btn");
        var i = 1,j=1,k=1; // define variable i as your "index"
        $(qty).each(function(index) {
            $(this).attr("id", "quantity" + i); // Use $(this) to pull out the current element
            i++; // Increase i by 1 each time you loop through your h2 elements
        });
        $(packing).each(function(index) {
            $(this).attr("id", "packing" + j); // Use $(this) to pull out the current element
            j++; // Increase i by 1 each time you loop through your h2 elements

        });
        $(cart_remove).each(function(index) {
            $(this).attr("id", "cart_remove" + k); // Use $(this) to pull out the current element
            k++; // Increase i by 1 each time you loop through your h2 elements

        });
    });


     //измененеие количества фасовки и штук
    $('.vertical-switcher__arrow-left').click(function (e) {
        e.preventDefault();
        if($(this).closest('div').data('type') == 'packing') {
            let currentVal = $(this).closest('.vertical-switcher').find('.vertical-switcher-val');
            let closestInput = $(this).closest('.vertical-switcher').find('select');
            let intVal = parseInt(currentVal.text(), 10);
            var val = intVal;
            for(var option of $(closestInput).find('option')){
                if($(option).val() == intVal) break;
                val = $(option).val();
            }
            $('#selected_id_row').val(closestInput.data('index'));
            currentVal.text(val);
            closestInput.val(val).trigger('change');
        }
        return false;
    });
    //+
    $('.vertical-switcher__arrow-right').click(function (e) {
        e.preventDefault();
        if($(this).closest('div').data('type') == 'packing') {
            let currentVal = $(this).closest('.vertical-switcher').find('.vertical-switcher-val');
            let closestInput = $(this).closest('.vertical-switcher').find('select');
            let intVal = parseInt(currentVal.text(), 10);
            var val = intVal;
            var next = false;
            for(var option of $(closestInput).find('option')){
                val = $(option).val();
                if(next) break;
                if($(option).val() == intVal) next = true;
            }
            $('#selected_id_row').val(closestInput.data('index'));
            currentVal.text(val);
            closestInput.val(val).trigger('change');
        }
        return false;
    });

    $('#np').click(function () {
        $('.contact-select').hide();
        $('.select-entity').hide();
        $('.select-np').show();
        $(this).closest('.contact-select').data("selected","np");
        checkNpFields();
    });
    $('#entity').click(function () {
        $('.contact-select').hide();
        $('.select-np').hide();
        $('.select-entity').show();
        $(this).closest('.contact-select').data("selected","entity");
        checkEntityFields();
    });

</script>

<script>
    //переключение выбора способа оплаты
    $('.basket__payment-item').click(function () {
        $('.basket__payment-item-active').removeClass('basket__payment-item-active');
        this.classList.add('basket__payment-item-active');
        var val_input = $('.basket__payment-item-active').find('span.value').html();
        $(this).closest('.basket__payment').data("selected",val_input);
        $("#buttonPaymentNext").show();
        console.log(val_input);
    });
</script>

<script>
    //переключение выбора способа оплаты
    $('.basket__delivery-item').click(function () {
        $('.basket__delivery-item-active').removeClass('basket__delivery-item-active');
        this.classList.add('basket__delivery-item-active');
        var val_input = $('.basket__delivery-item-active').find('span.value').html();
        $(this).closest('.basket__delivery').data("selected",val_input);
        $("#buttonDeliveryNext").show();
        console.log(val_input);
    });
</script>

<script>
    var spinner=$('#loader');

    //update item in cart
    $('.packing').change(function(){
        spinner.show();
        let index = $('#selected_id_row').val();
        let pack = $("#packing"+index+"");
        let qty = $("#quantity"+index+"");
        let packing = pack.val();
        let quantity = qty.val();

        $.ajax({
            type: 'PATCH',
            url: pack.data('url'),
            dataType: "JSON",
            data: {
                packing: packing,
                quantity: quantity,
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                spinner.hide();
                toastr.success(data.message);
                data.quantity && $("#quantity"+index).val(data.quantity);
                $("#quantity"+index).blur();
            },
            error: function (error) {
                spinner.hide();
                toastr.warning(error.responseJSON.message);
                $("#quantity"+index).val(error.responseJSON.quantity).blur();
            }
        });
        return false;
    });

    //update item in cart
    $('.quantity').change(function(){
        spinner.show();
        $('#selected_id_row').val($(this).data('index'));
        let index = $('#selected_id_row').val();
        let pack = $("#packing"+index);
        let qty = $("#quantity"+index);
        let packing = pack.val();
        let quantity = qty.val();

        console.log("#quantity"+index)

        $.ajax({
            type: 'PATCH',
            url: qty.data('url'),
            dataType: "JSON",
            data: {
                packing: packing,
                quantity: quantity,
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                spinner.hide();
                toastr.success(data.message);
                data.quantity && $("#quantity"+index).val(data.quantity);
                $("#quantity"+index).blur();
            },
            error: function (error) {
                spinner.hide();
                toastr.error(error.responseJSON.message);
                $("#quantity"+index).val(error.responseJSON.quantity).blur();
            }
        });
        return false;
    });

    function checkNpFields(){
        for(var el of $("#contactNp").find('input,textarea,select'))
            if(!el.checkValidity()) {
                $("#next-button__customer_type").hide();
                return false;
            }
        $("#next-button__customer_type").show();
        return true;
    }

    function checkEntityFields(){
        for(var el of $("#contactEntity").find('input,textarea,select'))
            if(!el.checkValidity()) {
                $("#next-button__customer_type").hide();
                return false;
            }
        $("#next-button__customer_type").show();
        return true;
    }

    //delete item from cart
    $('.cart_remove.btn').click(function(){
        spinner.show();
        $.ajax({
            type: 'DELETE',
            url: $(this).data('url'),
            data: {'_token': $('meta[name="csrf-token"]').attr('content')},
            success: function (data) {
                spinner.hide();
                window.location.reload();
            },
            error: function (data) {
                spinner.hide();
                console.log(data);
                // window.location.reload();
            }
        });
        return false;
    });
</script>

