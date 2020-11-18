@include('modals.request-modal')
<div class="header">
    <div class="header-menu">
        <div class="header-top-menu-wrapper">
            <div class="container">
                <div class="header-top-menu header-top-menu-big">
                    <div class="header-top-menu__contacts-wrapper">
                        <div class="header-top-menu__contacts">
                            <div class="header-top-menu__contacts-phone">
                                <a href="tel:+{{setting('site.phone_office')}}">{{setting('site.phone_office')}}</a>
                            </div>
                            <div class="header-top-menu__contacts-desc">
                                <a href="#" class="main-button main-button_yellow" id="request_modal_auth" data-toggle="modal"
                                   data-target="#requestModal">Прикрепить заявку</a>
                            </div>
                        </div>
                    </div>
                        <a href="/" style="position: absolute; margin-left: calc(50% - 95px);">
                            <img src="{{asset('storage/'.setting('site.logo'))}}" class="header-top-menu__logo" alt="logo">
                        </a>

                        @auth
                            @include('header.logged_in_actions')
                        @else
                            @include('header.anonymous_actions')
                        @endauth
                </div>
            </div>
        </div>
        <div class="header-bottom-menu-wrapper">
            <div class="container">
                <div class="header-bottom-menu">
                    @php
                    if (!isset($active)) {
                        $active = "";
                    }
                    @endphp
                    <ul class="header-bottom-menu__list"
                           aria-haspopup="true" aria-expanded="false">
                            <a href="{{ route('catalog') }}">
                                <li id="catalog"
                                    @if ($active == 'Каталог')
                                    class="header-bottom-menu__list_active"
                                    @endif
                                >
                                    Каталог
                                </li>
                            </a>

                        <a href="/crop_guide">
                            <li @if ($active == 'Справочник')
                                class="header-bottom-menu__list_active"
                                @endif>
                                Справочник
                            </li>
                        </a>
                        <a href="/about_us">
                            <li @if ($active == 'О_нас')
                                class="header-bottom-menu__list_active"
                                @endif>
                                О нас
                            </li>
                        </a>
                        <a href="/contacts">
                            <li  @if ($active == 'Контакты')
                                 class="header-bottom-menu__list_active"
                                @endif>
                                Контакты
                            </li>
                        </a>
                    </ul>

                    <div class="header-bottom-menu-sm">
                        <div class="dropdown">
                            <button class="btn  dropdown-toggle header-bottom-menu-sm-button" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bars header-bottom-menu-sm-icon"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item h-sm-dr-item" type="button">
                                    <a href="/catalog">
                                        Каталог
                                    </a>
                                </button>
                                <button class="dropdown-item h-sm-dr-item" type="button">
                                    <a href="/crop_guide">
                                        Справочник
                                    </a>
                                </button>
                                <button class="dropdown-item h-sm-dr-item" type="button">
                                    <a href="/about_us"> О нас
                                    </a>
                                </button>
                                <button class="dropdown-item h-sm-dr-item" type="button">
                                    <a href="/contacts"> Контакты
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="nav">
                        <li class="button-dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle">
                                <div class="inner-addon">
                                    <a class="searchbar__button" onclick="$('#search_main_form').submit();">
                                        <svg viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.01"  fill="black"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7291 15H9.27079C6.66663 15 4.16663 12.5 4.16663 9.89587V8.43754C4.16663 5.83337 6.66663 3.33337 9.27079 3.33337H10.7291C13.3333 3.33337 15.8333 5.83337 15.8333 8.43754V9.89587C15.8333 12.5 13.3333 15 10.7291 15Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16.6666 16.6667L14.075 13.75" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                    <form method="GET"  action="{{route('search')}}" id="search_main_form">

                                        <input
                                            value="{{request('q')}}"
                                            style="padding-left: 16px; color: white!important;"
                                            class="classic-input classic-input__header_input classic-input__dropdown classic-input__header_input-white"
                                            placeholder="Поиск товара" type="text" name="q">
                                    </form>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
</div>


