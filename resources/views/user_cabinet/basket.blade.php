{{--@php--}}
{{--echo (\App\Services\HelperService::subtractDeciminals('26,319.62', '3,999.60')); exit;--}}
{{--@endphp--}}
@extends('layouts.site')

@section('content')

    <div class="container">
        <div class="breadcrubms">
            <a href="{{route('main')}}">Главная</a>
            /
            <a href="#">Корзина</a>
        </div>
        <h2 class="main_grey-text text-page__top-h">Корзина</h2>
        @if(count($items) > 0)
        <div class="basket">
            <div class="basket__timeline">
                <div class="basket__timeline-done" id="progressbar">
                    <li class="active-step basket__timeline-line-tip-container">
                        <span>Товар в корзине</span>
                        <div class="basket__timeline-line-tip">
                            25%
                        </div>
                    </li>
                    <li class="basket__timeline-line-tip-container">
                        <span>Информация заполнена</span>
                        <div class="basket__timeline-line-tip">
                            50%
                        </div>
                    </li>
                    <li class="basket__timeline-line-tip-container">
                        <span>Доставка</span>
                        <div class="basket__timeline-line-tip">
                            75%
                        </div>
                    </li>
                    <li class="basket__timeline-line-tip-container">
                        <span>Оформить заказ</span>
                        <div class="basket__timeline-line-tip">
                            100%
                        </div>
                    </li>
                </div>

                <div class="basket__timeline-line">
                </div>
            </div>
        </div>
        <br>
        <div class="basket__info">
            <div class="msform-wrapper">
                @include('elements.multistep')
            </div>
            <div class="basket__info-product">
                <div class="basket__info-product-title">
                    заказ: <span>№<span id="order_nr_front"></span></span>
                </div>
                <div class="basket__info-product__check">
                    @php
                        $index = 0;
                    @endphp
                    @foreach($items as $item)
                        @if($index++>1)
                            <div class="basket__info-product__check-toggle-cont">
                                <div class="basket__info-product__check-item">
                                    <div class="price-box">
                                        {{ (\Auth::user()) ? $item['associatedModel']['name'] : $item->model->name }}
                                        <div class="price-box__container price-box__container-sm">
                                            <span>₽ {{$item->getPriceSumWithConditions()}}</span>
                                            <div>в т.ч. НДС
                                                <div class="nds">{{ \App\Services\HelperService::presentPrice($item->attributes->nds) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="basket__info-product__check-item">
                                <div class="price-box">
                                    {{ (\Auth::user()) ? $item['associatedModel']['name'] : $item->model->name }}
                                    <div class="price-box__container price-box__container-sm">
                                        <span>₽ {{$item->getPriceSumWithConditions()}}</span>
                                        <div>в т.ч. НДС
                                            <div class="nds">{{  \App\Services\HelperService::presentPrice($item->attributes->nds) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    @if(count($items)>2)
                        <div class="basket__info-product__check-more-btn">
                            <span>...</span>
                        </div>
                    @endif
                    <div class="basket__info-product__check-item">
                        <div class="price-box">
                            Сумма заказа:
                            <div class="price-box__container price-box__container-sm">
                                <span>₽ {{ $total}}</span>
                                <div>в т.ч. НДС
                                    <div class="nds">{{ \App\Services\HelperService::presentPrice($ndsTotal) }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="basket__info-product-info">
                    <ul>
                        <li>Контактная информация</li>
                        <li>Доставка</li>
                        <li>Оплата</li>
                    </ul>
                </div>
                <a href="#"
                   id="makeOrder"
                   class="main-button main-button_yellow basket__info-product-button main-button_yellow-disabled">Оформить
                    заказ</a>
            </div>
        </div>
        @else
            <h3>@lang('В корзине нет товаров!')</h3>
            <br>
            <a href="{{ route('catalog') }}"
               class="main-button main-button_yellow product__info-block__black-button product__info-block__black-button_help small-product-button">
                Вернуться в каталог
            </a>
            <hr>
        @endif
    </div>
@endsection
@section('java___script')

    <script>
        //раскрытие чека
        let click = true;
        $('.basket__info-product__check-more-btn').click(function () {
            if(click){
                $('.basket__info-product__check-toggle-cont').slideToggle();
                click = false;
            }
            else {
                $('.basket__info-product__check-toggle-cont').slideToggle();
                click = true;
            }
        });
        $(document).ready(function () {
            var order_nr_url = '{{route("order_nr_generate")}}';
            $.ajax({
                url:order_nr_url,
                method:'GET',
                // data:{check:value},
                dataType:'JSON',
                success: function(response){
                    nr = response.result;
                    $('#order_nr_front').text(nr);
                }
            });
        });
    </script>
    <script>
        var spinner=$('#loader');

        function getFormObj(formId) {
            var formObj = {};
            var inputs = $('#'+formId).serializeArray();
            $.each(inputs, function (i, input) {
                formObj[input.name] = input.value;
            });
            return formObj;
        }

        function UploadEntFilesWithFormData(){
            var formData = new FormData(); // Currently empty
            var myFileInput = document.getElementById('ent_file').files;

            if(myFileInput.length > 0){
                for(var i=0;i<myFileInput.length;i++){
                    formData.append("files[]", myFileInput[i]);
                }
                // upload ent files before make order
                $.ajax({
                    type: 'POST',
                    url: '{{route("upload_ent_files")}}',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: 'json',
                    success: function (response) {
                        console.log(response.result);
                        console.log(response.message);
                    },
                    error: function (response) {
                        console.log(response.result);
                    }
                });
            }
            return false;
            // var ArrFile=[];
            // var files = $('input[name=ent_file]').get(0).files;
            // console.log(files);
            // for (var i = 0; i < files.length; i++) {
            //     ArrFile.push(files[i]);
            // }
            // return ArrFile;
        }
        $('#makeOrder').on('click',function (e) {
            e.preventDefault();
            spinner.show();
            var del_method = $('.basket__delivery').data("selected");
            var delivery = {'del_method': del_method};
            var pay_method = $('.basket__payment').data("selected");
            var payment = {'pay_method': pay_method};
            var order_nr_value = $('#order_nr_front').text();
            var order_nr = {'order_nr': order_nr_value};
            var formObjects ={};
            var contactNp = {};
            var contactEntity = {};

            var user_type = $('.contact-select').data("selected");

            if (user_type === 'np'){
                console.log('selected NP!');
                contactNp = getFormObj('contactNp');
            }else if(user_type === 'entity'){
                console.log('selected Entity!');
                contactEntity = getFormObj('contactEntity');
                UploadEntFilesWithFormData();
            }
            formObjects = Object.assign(delivery,payment,order_nr,contactNp,contactEntity);
            console.log(formObjects);


        $.ajax({
                type: 'POST',
                url: '{{route("checkout.store")}}',
                data: formObjects,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                success: function (data) {
                    spinner.hide();
                    console.log(data);
                    if(data.errors){
                        window.location.reload();
                    }else{
                        window.location.href = data.url;
                    }
                },
                error: function (data) {
                    spinner.hide();
                    console.log(data);
                    window.location.reload();
                }
            });
        })
    </script>
@endsection
