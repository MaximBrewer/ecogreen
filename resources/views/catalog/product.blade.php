@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="breadcrubms">
            <a href="{{ route('main')}}">Главная</a>
            /
            <a href="{{ route('catalog') }}">Каталог</a>
        </div>
        <div class="product">
            <div class="product__top">
                <div class="product__info-block">
                    <div class="product__info-block__item product__info-block__item_first">
                        <h2>{{ $oneItem->name }}</h2>
                        <div class="product__info-block__price">
                            <p>Цена рекомендованная</p>
                            <span>
                                <div class="product__info-block__price__foreign">$530</div>
                                {{\App\Services\HelperService::presentPrice($oneItem->price)}} руб.
                            </span>
                        </div>
                        <form>
                            <div class="product__packing">Выберите фасовку товара
                                <ul class="pack-count-cont">
                                    @foreach ($onePackings as $item)
                                        <li class="pack-count" style="margin-right:-3px;" value="{{ $item->name }}">{{ $item->name }}{{$oneItem->pack_type}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <input type="hidden" name="packing" id="packing_id" value="">
                            <label role="button" id="product_add_to_cart" data-id="{{$oneItem->id}}" class="bottom-button main-button main-button_yellow small-product-button">
                                Купить
                            </label>
                        </form>
                    </div>
                    <div class="vertical-greyline product__greyline"></div>
                    <div class="text-center product__info-block__item">
                        <div class="product__info-block__title">
                            Консультация по товару
                        </div>

                        <div class="product__info-block__text">
                            Если вы не можете найти необходим товар. Просто напишите нам, либо вернитесь в каталог
                        </div>

                        <a href="{{ route('catalog') }}"
                           class="main-button main-button_yellow product__info-block__black-button product__info-block__black-button_help small-product-button">
                            Вернуться в каталог
                        </a>

                        <a href="#" data-toggle="modal"
                           data-target="#requestModal"
                           class="bottom-button main-button main-button_yellow small-product-button">
                            Задайте свой вопрос
                        </a>
                    </div>
                </div>
            </div>
            <div class="product__bottom">
                <div class="product__description-table">
                    <div class="product__description-table__header-row slide-nav">
                                <div class="slide-nav-item product__description-table__header-row-item product__description-table__header-row-item_active">
                                    Информация по товару
                                </div>
                                <div class="slide-nav-item product__description-table__header-row-item">
                                    Нормы применения препарата
                                </div>
                                <div class="slide-nav-item product__description-table__header-row-item">
                                    Описания
                                </div>
                                <div class="slide-nav-item product__description-table__header-row-item">
                                    Документы
                                </div>
                    </div>
                    <div class="slide-container">
                        <ul class="slides">
                            <li>
                                <table class="grey-container">
                                    <thead>
                                    <tr>
                                        <th>
                                            Наименование характеристики
                                        </th>
                                        <th id="sortThis">
                                            Характеристика
{{--                                            <svg class="y-triangle" width="29" height="12" viewBox="0 0 29 12"--}}
{{--                                                 fill="none"--}}
{{--                                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                <path fill-rule="evenodd" clip-rule="evenodd"--}}
{{--                                                      d="M23.5 11.625L29 3.375H18L23.5 11.625Z" fill="#FF9900"/>--}}
{{--                                            </svg>--}}
                                        </th>
                                    </tr>
									</thead>
									<tbody>
                                    @foreach($oneItem->getCategoryItems as $item)
                                        <tr>
                                            <td>{{ DB::table('category')->where('id',$item->cat_id)->first()->name }}</td>
                                            <td>{{ DB::table('category_items')->where('id',$item->pivot->cat_items_id)->first()->name}}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td>формуляция</td>
                                        <td>{{ $oneItem->formulation }}</td>
                                    </tr>
                                    <tr>
                                        <td>Химический класс</td>
                                        <td><a href="{{route('chemical',['id'=>$oneItem->class_id,'product_id'=>$oneItem->id])}}">{{ $oneItem->getChemical->name }}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Действующее вещество</td>
                                        <td><a href="{{ route('substance',['id'=>$oneItem->active_substance_id,'product_id'=>$oneItem->id]) }}">{{ $oneItem->getActiveSubstance->name }}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Концентрация ДВ</td>
                                        <td>{{ $oneItem->concentration }}</td>
                                    </tr>
                                    <tr>
                                        <td>Класс опасности</td>
                                        <td>{{ $oneItem->hazard_class }}</td>
                                    </tr>
                                    @php
                                        $all="";
                                        foreach($onePackings as $item){
                                            $all.=$item->name;
                                            $all.=", ";
                                        }
                                        $all=substr($all,0,-1);
                                    @endphp
                                    <tr>
                                        <td>Упаковка</td>
                                        <td>{{ $all }} {{$oneItem->pack_type}}</td>
                                    </tr>
                                    <tr>
                                        <td>Регистрант ( производитель)</td>
                                        <td>{{ $oneItem->getBrand->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Регистрационный номер</td>
                                        <td>{{ $oneItem->reg_number }}</td>
                                    </tr>
                                    <tr>
                                        <td>Окончание регистрации</td>
                                        <td>{{ $oneItem->end_of_reg }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li>
                                <table class="grey-container">
                                    <tr>
                                        <th>
                                            Норма
                                        </th>
                                        <th>
                                            Культуры
                                        </th>
                                        <th>
                                            Вредители
                                        </th>
                                        <th class="big-col">
                                            Применение
                                        </th>
                                        <th>
                                            Ож.крат
                                        </th>
                                        <th>
                                            Мех.руч
                                        </th>
                                    </tr>
                                    {{-- <tr>
                                        <td>0,35 - 0,4</td>
                                        <td>Яблоня</td>
                                        <td>Яблонная плодожорка, листовёртки</td>
                                        <td class="big-col">Опрыскивание в период вегитации. Расход рабочей жидкости
                                            1000-1500 л/га
                                        </td>
                                        <td>10(2)</td>
                                        <td>10(4)</td>
                                    </tr> --}}
                                    @foreach($norm as $val)
                                        <tr>
                                            <td>{{ $val->norm}}</td>
                                            <td><a href="{{route('crop_guide.product',['slug'=> DB::table('posts')->where('id',$val->post_id)->value('slug')])}}">{{ DB::table('posts')->where('id',$val->post_id)->value('title') }}</a></td>
                                            <td>{{ $val->pests }}</td>
                                            <td class="big-col">{{ $val->use }}</td>
                                            <td>{{ $val->oj_krat }}</td>
                                            <td>{{ $val->mex_ruch }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </li>
                            <li>
                                <div class="grey-container">
                                    <div class="usual-text usual-text__grey" style="clear: both">
                                           {!! $oneItem->description !!}
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="grey-container">
                                    <div class="order-documents-wrapper">
                                        <div class="product-documents ">
                                            @php
                                                if(!empty($oneItem->file)){
                                                    $array=explode('"',$oneItem->file);
                                                    $file_name=$array[7];
                                                }else{
                                                    $file_name="";
                                                }
                                            @endphp
                                            <a href="{{ route('getProductDocument',$oneItem->id) }}">
                                                <div class="order-documents__item">
                                                    <svg width="24" height="30" viewBox="0 0 24 30" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M24 3.83097L20.0596 0H18H2.57143C1.15127 0 0 1.11929 0 2.5V27.5C0 28.8807 1.15127 30 2.57143 30H21.4286C22.8487 30 24 28.8807 24 27.5V5.83333V3.83097ZM22.8 4.66667L22.8 4.31417L19.5626 1.16667H19.2V4.66667H22.8ZM18 1.16667V5.83333H22.8V27.5L22.7944 27.6214C22.7313 28.3009 22.1439 28.8333 21.4286 28.8333H2.57143L2.4466 28.8279C1.74768 28.7666 1.2 28.1955 1.2 27.5V2.5L1.2056 2.37864C1.26867 1.69913 1.85609 1.16667 2.57143 1.16667H18ZM14.6139 14.9959C14.6139 16.904 13.4904 17.9918 12.0239 17.9918C10.5493 17.9918 9.43386 16.8954 9.43386 14.9959C9.43386 13.0879 10.5493 12 12.0239 12C13.4904 12 14.6139 13.0879 14.6139 14.9959ZM5.96073 17.9121C7.64598 17.9121 8.66685 16.8128 8.66685 14.9902C8.66685 13.1733 7.64598 12.0797 5.97693 12.0797H4V17.9121H5.96073ZM5.91211 16.8556H5.16941V13.1363H5.91481C6.95189 13.1363 7.50014 13.6945 7.50014 14.9902C7.50014 16.2917 6.95189 16.8556 5.91211 16.8556ZM12.0239 16.9011C11.1731 16.9011 10.6195 16.2319 10.6195 14.9959C10.6195 13.76 11.1731 13.0907 12.0239 13.0907C12.8719 13.0907 13.4282 13.76 13.4282 14.9959C13.4282 16.2319 12.8719 16.9011 12.0239 16.9011ZM20.3583 15.9243C20.2314 16.998 19.3752 17.9918 17.9574 17.9918C16.4774 17.9918 15.3809 16.8983 15.3809 14.9959C15.3809 13.0879 16.4963 12 17.9574 12C19.2375 12 20.2044 12.7746 20.3583 14.1216H19.1754C19.0863 13.4809 18.6244 13.0907 17.9844 13.0907C17.1282 13.0907 16.5665 13.7827 16.5665 14.9959C16.5665 16.2433 17.1363 16.9011 17.9763 16.9011C18.6001 16.9011 19.0647 16.5423 19.1754 15.9186L20.3583 15.9243Z"
                                                        />
                                                    </svg>
                                                    <span>{{ $file_name}}</span>
                                                </div>
                                            </a>
                                            <a href="{{ route('getZipFile',$oneItem->id) }}">
                                                <div class="order-documents__item">
                                                    <svg width="24" height="30" viewBox="0 0 24 30" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M24 3.83097L20.0596 0H18H2.57143C1.15127 0 0 1.11929 0 2.5V27.5C0 28.8807 1.15127 30 2.57143 30H21.4286C22.8487 30 24 28.8807 24 27.5V5.83333V3.83097ZM22.8 4.66667L22.8 4.31417L19.5626 1.16667H19.2V4.66667H22.8ZM18 1.16667V5.83333H22.8V27.5L22.7944 27.6214C22.7313 28.3009 22.1439 28.8333 21.4286 28.8333H2.57143L2.4466 28.8279C1.74768 28.7666 1.2 28.1955 1.2 27.5V2.5L1.2056 2.37864C1.26867 1.69913 1.85609 1.16667 2.57143 1.16667H18ZM14.6139 14.9959C14.6139 16.904 13.4904 17.9918 12.0239 17.9918C10.5493 17.9918 9.43386 16.8954 9.43386 14.9959C9.43386 13.0879 10.5493 12 12.0239 12C13.4904 12 14.6139 13.0879 14.6139 14.9959ZM5.96073 17.9121C7.64598 17.9121 8.66685 16.8128 8.66685 14.9902C8.66685 13.1733 7.64598 12.0797 5.97693 12.0797H4V17.9121H5.96073ZM5.91211 16.8556H5.16941V13.1363H5.91481C6.95189 13.1363 7.50014 13.6945 7.50014 14.9902C7.50014 16.2917 6.95189 16.8556 5.91211 16.8556ZM12.0239 16.9011C11.1731 16.9011 10.6195 16.2319 10.6195 14.9959C10.6195 13.76 11.1731 13.0907 12.0239 13.0907C12.8719 13.0907 13.4282 13.76 13.4282 14.9959C13.4282 16.2319 12.8719 16.9011 12.0239 16.9011ZM20.3583 15.9243C20.2314 16.998 19.3752 17.9918 17.9574 17.9918C16.4774 17.9918 15.3809 16.8983 15.3809 14.9959C15.3809 13.0879 16.4963 12 17.9574 12C19.2375 12 20.2044 12.7746 20.3583 14.1216H19.1754C19.0863 13.4809 18.6244 13.0907 17.9844 13.0907C17.1282 13.0907 16.5665 13.7827 16.5665 14.9959C16.5665 16.2433 17.1363 16.9011 17.9763 16.9011C18.6001 16.9011 19.0647 16.5423 19.1754 15.9186L20.3583 15.9243Z"
                                                        />
                                                    </svg>
                                                    <span>Скачать архивом</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.slide-container').flexslider({
            animation: "slide",
            slideshow: false,
            animationSpeed: 0,
            directionNav: false,
            controlsContainer: ".container",
            controlNav: true,
            manualControls: ".slide-nav .slide-nav-item",
            touch: false,
            smoothHeight: true,
        });
    </script>
    <script>
        //переключение количества фасовки товара
        $('.pack-count').click(function () {
            $('.product__packing__item-active').removeClass('product__packing__item-active');
            this.classList.add('product__packing__item-active');
            this.value //взять значения передать далее
            $('#packing_id').val(this.value);
            // console.log($('#packing_id'));

        });
    </script>
    <script>
        //сортровка таблицы
        // document.addEventListener('DOMContentLoaded', () => {
        //
        //     const getSort = ({target}) => {
        //         const order = (target.dataset.order = -(target.dataset.order || -1));
        //         const index = [...target.parentNode.cells].indexOf(target);
        //         const collator = new Intl.Collator(['en', 'ru'], {numeric: true});
        //         const comparator = (index, order) => (a, b) => order * collator.compare(
        //             a.children[index].innerHTML,
        //             b.children[index].innerHTML
        //         );
        //
        //         for (const tBody of target.closest('table').tBodies)
        //             tBody.append(...[...tBody.rows].sort(comparator(index, order)));
        //
        //         for (const cell of target.parentNode.cells)
        //             cell.classList.toggle('sorted', cell === target);
        //     };
        //
        //     document.querySelectorAll('#sortThis').forEach(tableTH => tableTH.addEventListener('click', () => getSort(event)));
        //
        // });
    </script>
@endsection
