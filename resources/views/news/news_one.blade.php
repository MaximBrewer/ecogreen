@extends('layouts.site')

@section('content')
    <div class="text-page">
        <div class="container">
            <div class="breadcrubms">
                <a href="{{route('main')}}">Главная</a>
                /
                <a href="{{route('news')}}">Новости</a>
                /
                <a href="{{route('news.one',$post->slug)}}">{{$post->title}}</a>
            </div>
            <h2 class="main_grey-text text-page__top-h">{{$post->title}}</h2>
        </div>
        <!-- Slider main container -->
        <div class="product-swiper__bg" style="background: url({{asset('assets/potato_bg.png')}})">
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
                                    <img src="{{asset('storage/'.$image)}}" class=""
                                         style="height: 660px; margin: auto; display: inherit;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endisset
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <p class="usual-text usual-text__grey">
               {!! $post->body !!}
            </p>
            <br>
            @isset($post->images)
            <div class="crop-prev-images">
                @foreach($post->images as $image)
                    <a href="{{asset('storage/'.$image)}}" data-toggle="lightbox" data-gallery="example-gallery">
                        <img src="{{asset('storage/'.$image)}}" class="">
                    </a>
                @endforeach
            </div>
            @endisset
            <br>
        </div>
    </div>
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
