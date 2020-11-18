@extends('layouts.site')

@section('content')


    <div class="text-page">
        <div class="container">
            <div class="breadcrubms">
                <a href="{{route('main')}}">Главная</a>
                /
                <a href="{{route('crop_guide')}}">Справочник</a>
                /
                <a href="{{route('crop_guide.product',['slug'=>$post->slug])}}">{{$post->title}}</a>
            </div>
            <h2 class="main_grey-text text-page__top-h">{{$post->title}}</h2>
        </div>
        <!-- Slider main container -->
        <div class="crop_product__slider product-swiper__bg" style="background: url({{asset('assets/potato_bg.png')}})">
            <div class="product-swiper__bg-overlay"></div>
            <div class="container">
                <div class="arrow-swiper-wrapper">
                    @isset($post->images)
                    <div class="ar-c product-swiper product-swiper__sb-prev ">
                        <svg  viewBox="0 0 60 60" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                            <rect class="rect-hover"x="-1" y="1" width="58" height="58" rx="29" transform="matrix(-1 0 0 1 58 0)"
                                  fill="#FF9900"  />
                            <rect class="rect-show" x="-1" y="1" width="58" height="58" rx="29" transform="matrix(-1 0 0 1 58 0)"
                                  fill="#FF9900" stroke="url(#paint0_linear)" stroke-width="2"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M34.4142 21.5147L33 20.1005L24.5147 28.5858L23.1005 30L24.5147 31.4142L33 39.8995L34.4142 38.4853L25.9289 30L34.4142 21.5147Z"
                                  fill="white"/>
                            <defs>
                                <linearGradient id="paint0_linear" x1="19.582" y1="30" x2="19.582" y2="50.8359"
                                                gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF9900"/>
                                    <stop offset="1" stop-color="#2C2834"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="ar-c product-swiper product-swiper__sb-next">
                        <svg  viewBox="0 0 60 60" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                            <rect class="rect-hover"x="-1" y="1" width="58" height="58" rx="29" transform="matrix(-1 0 0 1 58 0)"
                                  fill="#FF9900"  />
                            <rect class="rect-show" x="-1" y="1" width="58" height="58" rx="29" transform="matrix(-1 0 0 1 58 0)"
                                  fill="#FF9900" stroke="url(#paint0_linear)" stroke-width="2"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M25.5858 38.4853L27 39.8995L35.4853 31.4142L36.8995 30L35.4853 28.5858L27 20.1005L25.5858 21.5147L34.0711 30L25.5858 38.4853Z"
                                  fill="white"/>
                            <defs>
                                <linearGradient id="paint0_linear" x1="19.582" y1="30" x2="19.582" y2="50.8359"
                                                gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF9900"/>
                                    <stop offset="1" stop-color="#2C2834"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>

                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach($post->images as $image)
                            <div class="swiper-slide">
                                <img src="{{asset('storage/'.$image)}}">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endisset
                </div>
            </div>
        </div>
        <!-->
        <br>
        <div class="container">
            <div class="usual-text usual-text__grey">
                {!! $post->body !!}
            </div>
            <br>
            @isset($post->images)
            <div class="crop-prev-images">
                @foreach($post->images as $image)
                    @php
                        $path = \App\Services\FileService::voyager_image($image,'cropped');
                    @endphp
                    <a href="{{asset('storage/'.$path)}}" data-toggle="lightbox" data-gallery="example-gallery">
                        <img src="{{asset('storage/'.$path)}}" class="">
                    </a>
                @endforeach
            </div>
            @endisset
            <br>
            <h2 class="text-center" style="font-size: 20px">Популярные вопросы и ответы о {{$post->title}}</h2>
            <br>

            {{-- Desktop --}}
            <div class="switcher crop-product-questions__desktop">
                <div class="crop-product-questions">
                    <div class="crop-product-questions__questions">
                        <ul class="slide-nav">
                            @foreach($post->faqs  as $faq)
                            <li>
                                <p class="crop-product-questions__questions-item">

                                    <span class="y-arrow"></span>

                                    {{$faq->question}}
                                </p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="slide-container crop-product-questions__answers">
                        <ul class="slides">
                            @foreach($post->faqs  as $faq)
                            <li>
                                <p class="usual-text__grey">
                                   {!! $faq->answer !!}
                                </p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            {{-- Mobile --}}
            <div class="crop-product-questions__mobile accordion-container">
                <div class="crop-product-questions">
                    <div class="crop-product-questions__questions">
                        <ul>
                            @foreach($post->faqs  as $faq)
                            <li class="ac">
                                <p class="crop-product-questions__questions-item ac-q">

                                    <span class="y-arrow"></span>
                                    {{$faq->question}}
                                </p>
                                <p class="usual-text__grey ac-a">
{{--                                    {!! $faq->answer !!}--}}
                                    {!! nl2br(e($faq->answer)) !!}
                                </p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>


            <br>
{{--            <div style="align-items:center; display: inline-flex;">--}}
{{--                <a href="{{route('crop_guide.product',['slug'=>$post->slug,'download'=>'pdf'])}}" style="margin: 10px;">--}}
{{--                    <div class="order-documents__item" >--}}
{{--                        <svg width="25" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 3.83097L20.0596 0H18H2.57143C1.15127 0 0 1.11929 0 2.5V27.5C0 28.8807 1.15127 30 2.57143 30H21.4286C22.8487 30 24 28.8807 24 27.5V5.83333V3.83097ZM22.8 4.66667L22.8 4.31417L19.5626 1.16667H19.2V4.66667H22.8ZM18 1.16667V5.83333H22.8V27.5L22.7944 27.6214C22.7313 28.3009 22.1439 28.8333 21.4286 28.8333H2.57143L2.4466 28.8279C1.74768 28.7666 1.2 28.1955 1.2 27.5V2.5L1.2056 2.37864C1.26867 1.69913 1.85609 1.16667 2.57143 1.16667H18ZM5.35499 18.4088V16.331H6.49405C7.96795 16.331 8.82538 15.4516 8.82538 14.1717C8.82538 12.8981 7.9836 12 6.52848 12H4V18.4088H5.35499ZM6.275 15.2451H5.35499V13.1078H6.26874C7.05107 13.1078 7.42971 13.5334 7.42971 14.1717C7.42971 14.807 7.05107 15.2451 6.275 15.2451ZM15.1153 15.1981C15.1153 17.2009 13.9324 18.4088 11.9797 18.4088H9.70785V12H11.9985C13.9324 12 15.1153 13.2017 15.1153 15.1981ZM11.9234 17.2478H11.0628V13.161H11.9265C13.1282 13.161 13.7634 13.7743 13.7634 15.1981C13.7634 16.6282 13.1282 17.2478 11.9234 17.2478ZM17.4717 15.7614V18.4088H16.1167V12H20.36V13.1172H17.4717V14.6443H20.0784V15.7614H17.4717Z" fill="#605F5F"></path>--}}
{{--                        </svg>--}}
{{--                        <span>Скачать как PDF</span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <a href="{{route('crop_guide.product',['slug'=>$post->slug,'download'=>'word'])}}" style="margin: 10px;">--}}
{{--                    <div class="order-documents__item" >--}}
{{--                        <svg width="24" height="30" viewBox="0 0 24 30" fill="none"--}}
{{--                             xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path fill-rule="evenodd" clip-rule="evenodd"--}}
{{--                                  d="M24 3.83097L20.0596 0H18H2.57143C1.15127 0 0 1.11929 0 2.5V27.5C0 28.8807 1.15127 30 2.57143 30H21.4286C22.8487 30 24 28.8807 24 27.5V5.83333V3.83097ZM22.8 4.66667L22.8 4.31417L19.5626 1.16667H19.2V4.66667H22.8ZM18 1.16667V5.83333H22.8V27.5L22.7944 27.6214C22.7313 28.3009 22.1439 28.8333 21.4286 28.8333H2.57143L2.4466 28.8279C1.74768 28.7666 1.2 28.1955 1.2 27.5V2.5L1.2056 2.37864C1.26867 1.69913 1.85609 1.16667 2.57143 1.16667H18ZM14.6139 14.9959C14.6139 16.904 13.4904 17.9918 12.0239 17.9918C10.5493 17.9918 9.43386 16.8954 9.43386 14.9959C9.43386 13.0879 10.5493 12 12.0239 12C13.4904 12 14.6139 13.0879 14.6139 14.9959ZM5.96073 17.9121C7.64598 17.9121 8.66685 16.8128 8.66685 14.9902C8.66685 13.1733 7.64598 12.0797 5.97693 12.0797H4V17.9121H5.96073ZM5.91211 16.8556H5.16941V13.1363H5.91481C6.95189 13.1363 7.50014 13.6945 7.50014 14.9902C7.50014 16.2917 6.95189 16.8556 5.91211 16.8556ZM12.0239 16.9011C11.1731 16.9011 10.6195 16.2319 10.6195 14.9959C10.6195 13.76 11.1731 13.0907 12.0239 13.0907C12.8719 13.0907 13.4282 13.76 13.4282 14.9959C13.4282 16.2319 12.8719 16.9011 12.0239 16.9011ZM20.3583 15.9243C20.2314 16.998 19.3752 17.9918 17.9574 17.9918C16.4774 17.9918 15.3809 16.8983 15.3809 14.9959C15.3809 13.0879 16.4963 12 17.9574 12C19.2375 12 20.2044 12.7746 20.3583 14.1216H19.1754C19.0863 13.4809 18.6244 13.0907 17.9844 13.0907C17.1282 13.0907 16.5665 13.7827 16.5665 14.9959C16.5665 16.2433 17.1363 16.9011 17.9763 16.9011C18.6001 16.9011 19.0647 16.5423 19.1754 15.9186L20.3583 15.9243Z"--}}
{{--                            />--}}
{{--                        </svg>--}}
{{--                        <span>Скачать как Word</span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
            <br>
        </div>
    </div>

    <script>
        new Accordion('.accordion-container');
    </script>

    <script>
        $('.slide-container').flexslider({
            animation: "fade",
            slideshow: false,
            smoothHeight: true,
            animationSpeed: 0,
            directionNav: false,
            controlsContainer: ".container",
            controlNav: true,
            manualControls: ".slide-nav li"
        });

        var mySwiper = new Swiper('.swiper-container', {
            // Optional parameters
            loop: true,

            // Navigation arrows
            navigation: {
                nextEl: '.product-swiper__sb-next',
                prevEl: '.product-swiper__sb-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });

        mySwiper.on('slideChange', function () {
            console.log(mySwiper.realIndex);
        });


        //gallery
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>

@endsection
