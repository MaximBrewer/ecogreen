@extends('layouts.cabinet')

@section('cabinet_content')
    <div class="cabinet-container">
        <div class="cabinet__top-h">
            <div class="breadcrubms">
                <a href="/">Главная</a>
                /
                <a href="{{route('cabinet.profile')}}">
                    Личный кабинет</a>
                /
                <a href="{{route('orders')}}">
                    Заказы</a>
            </div>
            <h2 class="main_grey-text text-page__top-h">Заказ №{{$get->order_nr}}</h2>
        </div>
    </div>
    <div class="cabinet-orders">
        <table class="cabinet-orders__table table_sort table_sort-order">
            <thead>
            <tr>
                <th>Препорат</th>
                <th>Упаковка, л/кг</th>
                <th>Количество</th>
                <th>Рекомендованная цена</th>
                <th>Скидка</th>
                <th>Цена со скидкой</th>
                <th>Сумма</th>
            </tr>
            </thead>
            <tbody>
                @foreach($contents as $value)
                    <tr class="{{ ($value->notAvailable || $value->red_line) ? 'strike' : ''}}">
                        <td>{{ $value->getProduct->name }}<br>
                             <span class="grey-subtext">Агрохимикаты</span></td>
                        <td>{{ $value->packing }}{{$value->getProduct->pack_type}}</td>
                        <td>{{ $value->quantity }}</td>
                        <td>{{ $value->price }}</td>
                        <td>{{ ($value->discount!=0) ? $value->discount : 0 }} %</td>
                        <td>{{ $value->sale_price }}</td>
                        <td>{{ $value->subtotal }}<br>
                             <span class="nds">в т.ч. НДС {{ $value->nds_price }}</span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="order-total-price">
            Сумма заказа:
            <div class="order-total-price__container">
                <span>{{ $get->billing_total}}</span><br>
                 <div class="nds">в т.ч. НДС {{$get->billing_nds_total}}</div>
            </div>
        </div>
    </div>

    <div class="cabinet-container">
        <div class="order-bottom-info-wrapper">
            <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M0.536815 16C0.463145 16 0.394739 15.987 0.331594 15.9609C0.268448 15.9348 0.210565 15.8957 0.157944 15.8436C0.052701 15.7393 8.10623e-05 15.6116 8.10623e-05 15.4604C8.10623e-05 15.3092 0.052701 15.1815 0.157944 15.0772L7.35649 7.94526L0.252662 0.907136C0.147419 0.802867 0.094799 0.677747 0.094799 0.53177C0.094799 0.385793 0.147419 0.260672 0.252662 0.156403C0.357904 0.0521336 0.486824 0 0.639425 0C0.792027 0 0.920947 0.0521336 1.02619 0.156403L8.50889 7.56989C8.61413 7.67416 8.66675 7.79928 8.66675 7.94526C8.66675 8.09124 8.61413 8.21636 8.50889 8.32063L0.915686 15.8436C0.863064 15.8957 0.802551 15.9348 0.734143 15.9609C0.665735 15.987 0.59996 16 0.536815 16Z"
                />
            </svg>
            <div class="order-info-line">
                <div class="order-info-line__item order-info-line__item-active">
                <span class="order-info-line__item-title">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0.536815 16C0.463145 16 0.394739 15.987 0.331594 15.9609C0.268448 15.9348 0.210565 15.8957 0.157944 15.8436C0.052701 15.7393 8.10623e-05 15.6116 8.10623e-05 15.4604C8.10623e-05 15.3092 0.052701 15.1815 0.157944 15.0772L7.35649 7.94526L0.252662 0.907136C0.147419 0.802867 0.094799 0.677747 0.094799 0.53177C0.094799 0.385793 0.147419 0.260672 0.252662 0.156403C0.357904 0.0521336 0.486824 0 0.639425 0C0.792027 0 0.920947 0.0521336 1.02619 0.156403L8.50889 7.56989C8.61413 7.67416 8.66675 7.79928 8.66675 7.94526C8.66675 8.09124 8.61413 8.21636 8.50889 8.32063L0.915686 15.8436C0.863064 15.8957 0.802551 15.9348 0.734143 15.9609C0.665735 15.987 0.59996 16 0.536815 16Z"/>
                    </svg>
                    Последний коментарий</span>
                    <p class="order-info-line__item-text" id="latest_chat_comment">

                    </p>
                </div>
                <div class="order-info-line__item">
                <span class="order-info-line__item-title">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0.536815 16C0.463145 16 0.394739 15.987 0.331594 15.9609C0.268448 15.9348 0.210565 15.8957 0.157944 15.8436C0.052701 15.7393 8.10623e-05 15.6116 8.10623e-05 15.4604C8.10623e-05 15.3092 0.052701 15.1815 0.157944 15.0772L7.35649 7.94526L0.252662 0.907136C0.147419 0.802867 0.094799 0.677747 0.094799 0.53177C0.094799 0.385793 0.147419 0.260672 0.252662 0.156403C0.357904 0.0521336 0.486824 0 0.639425 0C0.792027 0 0.920947 0.0521336 1.02619 0.156403L8.50889 7.56989C8.61413 7.67416 8.66675 7.79928 8.66675 7.94526C8.66675 8.09124 8.61413 8.21636 8.50889 8.32063L0.915686 15.8436C0.863064 15.8957 0.802551 15.9348 0.734143 15.9609C0.665735 15.987 0.59996 16 0.536815 16Z"/>
                    </svg>
                    Контактные данные</span>
                    <p class="order-info-line__item-text">
                        ООО "ЭкоГрин"<br>
                        {{setting('site.email')}}<br>
                        +{{setting('site.phone_office')}}
                    </p>
                </div>
                <div class="order-info-line__item">
                <span class="order-info-line__item-title">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0.536815 16C0.463145 16 0.394739 15.987 0.331594 15.9609C0.268448 15.9348 0.210565 15.8957 0.157944 15.8436C0.052701 15.7393 8.10623e-05 15.6116 8.10623e-05 15.4604C8.10623e-05 15.3092 0.052701 15.1815 0.157944 15.0772L7.35649 7.94526L0.252662 0.907136C0.147419 0.802867 0.094799 0.677747 0.094799 0.53177C0.094799 0.385793 0.147419 0.260672 0.252662 0.156403C0.357904 0.0521336 0.486824 0 0.639425 0C0.792027 0 0.920947 0.0521336 1.02619 0.156403L8.50889 7.56989C8.61413 7.67416 8.66675 7.79928 8.66675 7.94526C8.66675 8.09124 8.61413 8.21636 8.50889 8.32063L0.915686 15.8436C0.863064 15.8957 0.802551 15.9348 0.734143 15.9609C0.665735 15.987 0.59996 16 0.536815 16Z"/>
                    </svg>
                    Менеджер</span>
                    <p class="order-info-line__item-text">
                        <span class="fw-600">Лебедко Ирина Владимировна<br>
                        <a href="tel:+78686656956">+7 868 665 695 6 E-mail: name@ecogreen.ru</a></span>
                    </p>
                </div>
            </div>


            <div class="order-documents-wrapper">
                <h2>Сопутствующие документы</h2>
                <br>
                <div class="order-documents">
                    <a href="{{ route('getZipOrderDocument',$get->id) }}">
                        <div class="order-documents__item">
                            <svg width="24" height="30" viewBox="0 0 24 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18 1C19.1046 1 20 1.89543 20 3V24C20 25.1046 19.1046 26 18 26H2C0.89543 26 0 25.1046 0 24V3C0 1.89543 0.89543 1 2 1H18ZM18 2H2C1.48716 2 1.06449 2.38604 1.00673 2.88338L1 3V24C1 24.5128 1.38604 24.9355 1.88338 24.9933L2 25H18C18.5128 25 18.9355 24.614 18.9933 24.1166L19 24V3C19 2.48716 18.614 2.06449 18.1166 2.00673L18 2ZM6 29C4.89543 29 4 28.1046 4 27H5C5 27.5128 5.38604 27.9355 5.88338 27.9933L6 28H22C22.5128 28 22.9355 27.614 22.9933 27.1166L23 27V6C23 5.48716 22.614 5.06449 22.1166 5.00673L22 5H21V4H22C23.1046 4 24 4.89543 24 6V27C24 28.1046 23.1046 29 22 29H6ZM9.58333 8.91893V12.3542H5.91893C5.41778 12.3542 5 12.7646 5 13.2708C5 13.7806 5.41142 14.1875 5.91893 14.1875H9.58333V18.0811C9.58333 18.5822 9.99374 19 10.5 19C11.0098 19 11.4167 18.5886 11.4167 18.0811V14.1875H15.0811C15.5822 14.1875 16 13.7771 16 13.2708C16 12.761 15.5886 12.3542 15.0811 12.3542H11.4167V8.91893C11.4167 8.41778 11.0063 8 10.5 8C9.99021 8 9.58333 8.41142 9.58333 8.91893Z"
                                />
                            </svg>
                            <span>Zip</span>
                        </div>
                    </a>
                    <a href="!#">
                        @foreach($docs as $key=>$value)
                            @php
                                $array=explode('"',$value->file);
                                $file_name=$array[7];
                                $type=explode(".",$file_name)[1];
                            @endphp

                            <div class="order-documents__item">
                                <svg width="24" height="30" viewBox="0 0 24 30" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M18 1C19.1046 1 20 1.89543 20 3V24C20 25.1046 19.1046 26 18 26H2C0.89543 26 0 25.1046 0 24V3C0 1.89543 0.89543 1 2 1H18ZM18 2H2C1.48716 2 1.06449 2.38604 1.00673 2.88338L1 3V24C1 24.5128 1.38604 24.9355 1.88338 24.9933L2 25H18C18.5128 25 18.9355 24.614 18.9933 24.1166L19 24V3C19 2.48716 18.614 2.06449 18.1166 2.00673L18 2ZM6 29C4.89543 29 4 28.1046 4 27H5C5 27.5128 5.38604 27.9355 5.88338 27.9933L6 28H22C22.5128 28 22.9355 27.614 22.9933 27.1166L23 27V6C23 5.48716 22.614 5.06449 22.1166 5.00673L22 5H21V4H22C23.1046 4 24 4.89543 24 6V27C24 28.1046 23.1046 29 22 29H6ZM9.58333 8.91893V12.3542H5.91893C5.41778 12.3542 5 12.7646 5 13.2708C5 13.7806 5.41142 14.1875 5.91893 14.1875H9.58333V18.0811C9.58333 18.5822 9.99374 19 10.5 19C11.0098 19 11.4167 18.5886 11.4167 18.0811V14.1875H15.0811C15.5822 14.1875 16 13.7771 16 13.2708C16 12.761 15.5886 12.3542 15.0811 12.3542H11.4167V8.91893C11.4167 8.41778 11.0063 8 10.5 8C9.99021 8 9.58333 8.41142 9.58333 8.91893Z"
                                    />
                                </svg>
                                <div><a href="{{ route('order.documents',$value->id) }}">{{ $file_name }}</a></div>

                            </div>
                        @endforeach
                    </a>
                </div>
            </div>

        </div>
@include('elements.new_message')

    </div>


    <script>
        //сортровка таблицы
        document.addEventListener('DOMContentLoaded', () => {

            const getSort = ({target}) => {
                const order = (target.dataset.order = -(target.dataset.order || -1));
                const index = [...target.parentNode.cells].indexOf(target);
                const collator = new Intl.Collator(['en', 'ru'], {numeric: true});
                const comparator = (index, order) => (a, b) => order * collator.compare(
                    a.children[index].innerHTML,
                    b.children[index].innerHTML
                );

                for (const tBody of target.closest('table').tBodies)
                    tBody.append(...[...tBody.rows].sort(comparator(index, order)));

                for (const cell of target.parentNode.cells)
                    cell.classList.toggle('sorted', cell === target);
            };

            document.querySelectorAll('.table_sort thead').forEach(tableTH => tableTH.addEventListener('click', () => getSort(event)));

        });
    </script>
    <script>
        //переключение вкладок просто анимация
        $('.order-info-line__item').click(function () {
            $('.order-info-line__item-active').removeClass('order-info-line__item-active');
            this.classList.add('order-info-line__item-active');
        });
        //кнопка закрыть сообщение
        $(document).on('click','.popup-message__close-btn', function () {
            let thisMsg = $(this).closest('.popup-message');
            thisMsg.removeClass('animate__fadeInRight');
            thisMsg.bind('animationend', () => {
                thisMsg.hide();
            });
            thisMsg.addClass('animate__fadeOutRight');
        });
        {{--$(document).ready(function () {--}}
        {{--        var value=$(this).find('.active').data('index');--}}
        {{--        var url='{{ route("shtrix_chiz") }}';--}}
        {{--        url=url.replace(":id",value);--}}
        {{--        url=url.replace(":id",value);--}}
        {{--        spinner.show();--}}
        {{--        $.ajax({--}}
        {{--            url:url,--}}
        {{--            method:'GET',--}}
        {{--            data:{id:value},--}}
        {{--            dataType:'JSON',--}}
        {{--            success: function(response){--}}
        {{--                spinner.hide();--}}
        {{--                product_jquery_code(response);--}}
        {{--            }--}}
        {{--        });--}}
        {{--});--}}

    </script>
@endsection
