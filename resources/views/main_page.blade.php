@extends('layouts.site')
@php
    $dollarRate = \TCG\Voyager\Models\Setting::where('key', 'shop.dollar.rate')->first()->value;
@endphp

@section('content')
    <div class="main_page">
        <div class="main_page__top-picture">
            <div class="container text-center">
                <div class="main_page__top-picture-header">
                    {!! setting('site.title') !!}
                </div>
            </div>
            <img src="{{ asset('storage/'.setting('site.title_image')) }}" alt="top-picture">
        </div>
        <div class="container">
            <h2 class="main_page_h2">Популярные товары</h2>

            <div class="swiper-container-1 main_page-swiper-container">
                <div class="swiper-wrapper" style="height: max-content;">
                    @foreach($products_xit as $item)
                        <div class="catalog__cards-card swiper-slide" style="height: max-content;">
                            <a class="catalog-link" href="{{route('catalog.product',['id'=>$item->id])}}">
                                <div class="catalog__cards-card-title">{{$item->name}}</div>
                            </a>
                            <div class="catalog__cards-card-product-composition">
                                ДВ: <span class="fw-600">	{{$item->getActiveSubstance->name}}</span>
                            </div>
                            <div class="catalog__cards-card-producer">
                                Производитель: <span class="fw-600">{{$item->getBrand->name}}</span></div>
                            <div class="d-flex justify-content-between align-items-baseline">
                                <div class="catalog__cards-card-price">
                                    @php
                                        $dollarPrice = \App\Services\HelperService::presentPrice($item->price /$dollarRate);
                                    @endphp
                                    <div class="catalog__cards-card-price__foreign">${{$dollarPrice}}</div>
                                    ₽ {{$item->price}}
                                </div>
                                    <a class="main-button_to-stock" data-id="{{$item->id}}">
                                        <svg width="25" height="24" viewBox="0 0 25 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M5.26305 0.688424C5.16196 0.365 4.86093 0.138428 4.51428 0.138428H1.42304L1.32462 0.144541C0.937747 0.192957 0.638428 0.523045 0.638428 0.923043L0.644541 1.02146C0.692957 1.40834 1.02305 1.70766 1.42304 1.70766H3.85443L6.31736 15.8271L6.34154 15.9269C6.44263 16.2503 6.74365 16.4769 7.09031 16.4769H21.5161L21.6177 16.4703C21.9509 16.427 22.2246 16.1736 22.2874 15.8358L24.3483 4.75886L24.3602 4.66297C24.3881 4.21888 24.035 3.83074 23.5769 3.83074H5.81781L5.28722 0.788227L5.26305 0.688424ZM6.09104 5.39997H22.6326L20.863 14.9077H7.74889L6.09104 5.39997ZM5.27528 20.967C5.27528 19.3725 6.54504 18.0725 8.12072 18.0725C9.6964 18.0725 10.9662 19.3725 10.9662 20.967C10.9662 22.5615 9.6964 23.8615 8.12072 23.8615C6.54504 23.8615 5.27528 22.5615 5.27528 20.967ZM9.39692 20.967C9.39692 20.231 8.82136 19.6417 8.12072 19.6417C7.42007 19.6417 6.84451 20.231 6.84451 20.967C6.84451 21.703 7.42007 22.2923 8.12072 22.2923C8.82136 22.2923 9.39692 21.703 9.39692 20.967ZM20.4857 18.0725C18.91 18.0725 17.6402 19.3725 17.6402 20.967C17.6402 22.5615 18.91 23.8615 20.4857 23.8615C22.0613 23.8615 23.3311 22.5615 23.3311 20.967C23.3311 19.3725 22.0613 18.0725 20.4857 18.0725ZM20.4857 19.6417C21.1863 19.6417 21.7619 20.231 21.7619 20.967C21.7619 21.703 21.1863 22.2923 20.4857 22.2923C19.785 22.2923 19.2094 21.703 19.2094 20.967C19.2094 20.231 19.785 19.6417 20.4857 19.6417Z"
                                            />
                                        </svg>
                                    </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="green-arrow-container">
                    <div id="gap1" class="green-arrow-prev">
                        <svg width="51" height="8" viewBox="0 0 51 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.646446 3.64645C0.451183 3.84171 0.451183 4.1583 0.646446 4.35356L3.82843 7.53554C4.02369 7.7308 4.34027 7.7308 4.53553 7.53554C4.7308 7.34028 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17158C4.7308 0.976315 4.7308 0.659732 4.53553 0.46447C4.34027 0.269208 4.02369 0.269208 3.82843 0.46447L0.646446 3.64645ZM51 3.5L1 3.5L1 4.5L51 4.5L51 3.5Z"
                                fill="#007705"/>
                        </svg>
                    </div>
                    <div id="gan1" class="green-arrow-next">
                        <svg width="51" height="8" viewBox="0 0 51 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M50.3536 4.35355C50.5488 4.15829 50.5488 3.84171 50.3536 3.64645L47.1716 0.464466C46.9763 0.269204 46.6597 0.269204 46.4645 0.464466C46.2692 0.659728 46.2692 0.976311 46.4645 1.17157L49.2929 4L46.4645 6.82843C46.2692 7.02369 46.2692 7.34027 46.4645 7.53553C46.6597 7.7308 46.9763 7.7308 47.1716 7.53553L50.3536 4.35355ZM0 4.5H50V3.5H0V4.5Z"
                                fill="#007705"/>
                        </svg>
                    </div>
                </div>
                <div style="clear: both"></div>
                <div class="swiper-pagination main_page__swiper-pagination"></div>
            </div>

            <h2 class="main_page_h2">Акции</h2>

            <div class="swiper-container-2 main_page-swiper-container">
                <div class="swiper-wrapper" style="height: max-content;">
                    @foreach($products_inSale as $item)
                        <div class="catalog__cards-card swiper-slide" style="height: max-content;">
                            <a class="catalog-link" href="{{route('catalog.product',['id'=>$item->id])}}">
                                <div class="catalog__cards-card-title">{{$item->name}}</div>
                            </a>
                            <div class="catalog__cards-card-product-composition">
                                ДВ: <span class="fw-600">	{{$item->getActiveSubstance->name}}</span>
                            </div>
                            <div class="catalog__cards-card-producer">
                                Производитель: <span class="fw-600">{{$item->getBrand->name}}</span></div>
                            <div class="d-flex justify-content-between align-items-baseline">
                                <div class="catalog__cards-card-price">
                                    @php
                                        $dollarPrice = \App\Services\HelperService::presentPrice($item->price /$dollarRate);
                                    @endphp
                                    <div class="catalog__cards-card-price__foreign">${{$dollarPrice}}</div>
                                    ₽ {{$item->price}}
                                </div>
                                    <a class="main-button_to-stock" data-id="{{$item->id}}">
                                        <svg width="25" height="24" viewBox="0 0 25 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M5.26305 0.688424C5.16196 0.365 4.86093 0.138428 4.51428 0.138428H1.42304L1.32462 0.144541C0.937747 0.192957 0.638428 0.523045 0.638428 0.923043L0.644541 1.02146C0.692957 1.40834 1.02305 1.70766 1.42304 1.70766H3.85443L6.31736 15.8271L6.34154 15.9269C6.44263 16.2503 6.74365 16.4769 7.09031 16.4769H21.5161L21.6177 16.4703C21.9509 16.427 22.2246 16.1736 22.2874 15.8358L24.3483 4.75886L24.3602 4.66297C24.3881 4.21888 24.035 3.83074 23.5769 3.83074H5.81781L5.28722 0.788227L5.26305 0.688424ZM6.09104 5.39997H22.6326L20.863 14.9077H7.74889L6.09104 5.39997ZM5.27528 20.967C5.27528 19.3725 6.54504 18.0725 8.12072 18.0725C9.6964 18.0725 10.9662 19.3725 10.9662 20.967C10.9662 22.5615 9.6964 23.8615 8.12072 23.8615C6.54504 23.8615 5.27528 22.5615 5.27528 20.967ZM9.39692 20.967C9.39692 20.231 8.82136 19.6417 8.12072 19.6417C7.42007 19.6417 6.84451 20.231 6.84451 20.967C6.84451 21.703 7.42007 22.2923 8.12072 22.2923C8.82136 22.2923 9.39692 21.703 9.39692 20.967ZM20.4857 18.0725C18.91 18.0725 17.6402 19.3725 17.6402 20.967C17.6402 22.5615 18.91 23.8615 20.4857 23.8615C22.0613 23.8615 23.3311 22.5615 23.3311 20.967C23.3311 19.3725 22.0613 18.0725 20.4857 18.0725ZM20.4857 19.6417C21.1863 19.6417 21.7619 20.231 21.7619 20.967C21.7619 21.703 21.1863 22.2923 20.4857 22.2923C19.785 22.2923 19.2094 21.703 19.2094 20.967C19.2094 20.231 19.785 19.6417 20.4857 19.6417Z"
                                            />
                                        </svg>
                                    </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="green-arrow-container">
                    <div id="gap2" class="green-arrow-prev">
                        <svg width="51" height="8" viewBox="0 0 51 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.646446 3.64645C0.451183 3.84171 0.451183 4.1583 0.646446 4.35356L3.82843 7.53554C4.02369 7.7308 4.34027 7.7308 4.53553 7.53554C4.7308 7.34028 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17158C4.7308 0.976315 4.7308 0.659732 4.53553 0.46447C4.34027 0.269208 4.02369 0.269208 3.82843 0.46447L0.646446 3.64645ZM51 3.5L1 3.5L1 4.5L51 4.5L51 3.5Z"
                                fill="#007705"/>
                        </svg>
                    </div>
                    <div id="gan2" class="green-arrow-next">
                        <svg width="51" height="8" viewBox="0 0 51 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M50.3536 4.35355C50.5488 4.15829 50.5488 3.84171 50.3536 3.64645L47.1716 0.464466C46.9763 0.269204 46.6597 0.269204 46.4645 0.464466C46.2692 0.659728 46.2692 0.976311 46.4645 1.17157L49.2929 4L46.4645 6.82843C46.2692 7.02369 46.2692 7.34027 46.4645 7.53553C46.6597 7.7308 46.9763 7.7308 47.1716 7.53553L50.3536 4.35355ZM0 4.5H50V3.5H0V4.5Z"
                                fill="#007705"/>
                        </svg>
                    </div>
                </div>
                <div style="clear: both"></div>
                <div class="swiper-pagination main_page__swiper-pagination"></div>
            </div>

            <h2 class="main_page_h2">Этапы покупки</h2>

            @include('elements.buy_schema')
            @include('elements.mobile_buy_scheme')

            <h2 class="main_page_h2">Последние новости</h2>
            <div class="swiper-container-3 main_page-swiper-container">
                <div class="swiper-wrapper">
                    @foreach($news as $item)
                        <div class="crop-guide-catalog__item swiper-slide"
                             style="height: auto;background: url({{asset('storage/'.$item->image)}});">
                            <div class="news-overlay" >
                                <div class="crop-guide-catalog__item-title news-overlay__title">
                                    {{Str::of($item->title)->limit(16)}}
                                </div>
                                <div class="news-overlay__news-line">
                                    <span class="main_green-text">НОВОСТИ КОМПАНИИ</span>
                                    <span>{{date_format($item->created_at,'d.m.Y')}}</span>
                                </div>
                                <div class="crop-guide-catalog__item-text">
                                   {{ Str::of($item->excerpt)->limit(150)}}
                                </div>
                                <a href="{{route('news.one',$item->slug)}}" class="crop-guide-catalog__item-link">Читать далее
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M9.54546 10.9242L14 7.21212L9.54546 3.5V6.0456H0V8.59106H9.54546V10.9242Z"
                                              fill="#FF9900"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="green-arrow-container">
                    <div id="gap3" class="green-arrow-prev">
                        <svg width="51" height="8" viewBox="0 0 51 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.646446 3.64645C0.451183 3.84171 0.451183 4.1583 0.646446 4.35356L3.82843 7.53554C4.02369 7.7308 4.34027 7.7308 4.53553 7.53554C4.7308 7.34028 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17158C4.7308 0.976315 4.7308 0.659732 4.53553 0.46447C4.34027 0.269208 4.02369 0.269208 3.82843 0.46447L0.646446 3.64645ZM51 3.5L1 3.5L1 4.5L51 4.5L51 3.5Z"
                                fill="#007705"/>
                        </svg>
                    </div>
                    <div id="gan3" class="green-arrow-next">
                        <svg width="51" height="8" viewBox="0 0 51 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M50.3536 4.35355C50.5488 4.15829 50.5488 3.84171 50.3536 3.64645L47.1716 0.464466C46.9763 0.269204 46.6597 0.269204 46.4645 0.464466C46.2692 0.659728 46.2692 0.976311 46.4645 1.17157L49.2929 4L46.4645 6.82843C46.2692 7.02369 46.2692 7.34027 46.4645 7.53553C46.6597 7.7308 46.9763 7.7308 47.1716 7.53553L50.3536 4.35355ZM0 4.5H50V3.5H0V4.5Z"
                                fill="#007705"/>
                        </svg>
                    </div>
                </div>
                <div style="clear: both"></div>
                <div class="swiper-pagination main_page__swiper-pagination"></div>
            </div>
            <h2 id="certs" class="main_page_h2">Лицензии сертификаты</h2>

            <div class="swiper-container-4 main_page-swiper-container">
                <div class="swiper-wrapper">
                    @foreach($license as $item)
                        @php
                            $path = $item->file;
                        @endphp
                    <a class="swiper-slide" href="{{asset('storage/'.$path)}}" data-toggle="lightbox"
                       data-gallery="example-gallery">
                        <img class="img-fluid" src="{{asset('storage/'.$path)}}" alt="certificate">
                    </a>
                    @endforeach
                </div>
                <div class="green-arrow-container">
                    <div id="gap4" class="green-arrow-prev">
                        <svg width="51" height="8" viewBox="0 0 51 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.646446 3.64645C0.451183 3.84171 0.451183 4.1583 0.646446 4.35356L3.82843 7.53554C4.02369 7.7308 4.34027 7.7308 4.53553 7.53554C4.7308 7.34028 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17158C4.7308 0.976315 4.7308 0.659732 4.53553 0.46447C4.34027 0.269208 4.02369 0.269208 3.82843 0.46447L0.646446 3.64645ZM51 3.5L1 3.5L1 4.5L51 4.5L51 3.5Z"
                                fill="#007705"/>
                        </svg>
                    </div>
                    <div id="gan4" class="green-arrow-next">
                        <svg width="51" height="8" viewBox="0 0 51 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M50.3536 4.35355C50.5488 4.15829 50.5488 3.84171 50.3536 3.64645L47.1716 0.464466C46.9763 0.269204 46.6597 0.269204 46.4645 0.464466C46.2692 0.659728 46.2692 0.976311 46.4645 1.17157L49.2929 4L46.4645 6.82843C46.2692 7.02369 46.2692 7.34027 46.4645 7.53553C46.6597 7.7308 46.9763 7.7308 47.1716 7.53553L50.3536 4.35355ZM0 4.5H50V3.5H0V4.5Z"
                                fill="#007705"/>
                        </svg>
                    </div>
                </div>
                <div style="clear: both"></div>
                <div class="swiper-pagination main_page__swiper-pagination" style="margin-bottom: 60px"></div>
            </div>
        </div>
    </div>
    <script>
        //gallery
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
    <script>
        var swiperOne = new Swiper('.swiper-container-1', {
            spaceBetween: 10,
            slidesPerView: 4,

            initialSlide: 0,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '#gan1',
                prevEl: '#gap1',
            },
            breakpoints: {
                100: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                720: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 10
                },

            }
        });
        var swiperTwo = new Swiper('.swiper-container-2', {
            spaceBetween: 10,
            slidesPerView: 4,
            initialSlide: 0,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '#gan2',
                prevEl: '#gap2',
            },
            breakpoints: {
                100: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                720: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 10
                },

            }
        });
        var swiperThree = new Swiper('.swiper-container-3', {
            spaceBetween: 10,
            slidesPerView: 4,
            initialSlide: 0,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '#gan3',
                prevEl: '#gap3',
            },
            breakpoints: {
                100: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                720: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 10
                },

            }
        });

        var swiperFour = new Swiper('.swiper-container-4', {
            spaceBetween: 40,
            slidesPerView: 3,
            initialSlide: 0,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '#gan4',
                prevEl: '#gap4',
            },
            breakpoints: {
                100: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                720: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },

            }
        });
    </script>
@endsection
