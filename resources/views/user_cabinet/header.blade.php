<div class="header  cabinet-header">
    <div class="header-menu">
        <div class="header-top-menu-wrapper header-top-menu-wrapper-white">
            <div class="cabinet-container">
                <div class="header-top-menu">
                    <a href="/">
                        <img src="{{asset('storage/'.setting('site.logo'))}}" class="header-top-menu__logo-cabinet" alt="logo">
                    </a>
                        <div class="cabinet-dropdown-wrapper">
                            <div class="button-dropdown">
                                    <div class="inner-addon">
                                        <a class="searchbar__button" onclick="$('#search_main_form').submit();">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.6183 16.5584C19.0189 14.8927 19.8896 12.7729 19.8896 10.4259C19.8896 5.23975 15.6498 1 10.4259 1C5.20189 1 1 5.23975 1 10.4259C1 15.612 5.23975 19.8517 10.4259 19.8517C12.7729 19.8517 14.8927 19.0189 16.5584 17.5804L21.5096 22.6956C21.8003 22.9959 22.2806 22.9998 22.5762 22.7042C22.8657 22.4147 22.8687 21.9463 22.583 21.6531L17.6183 16.5584ZM10.4259 18.3754C6.07256 18.3754 2.5142 14.817 2.5142 10.4259C2.5142 6.0347 6.07256 2.5142 10.4259 2.5142C14.7792 2.5142 18.3375 6.07256 18.3375 10.4259C18.3375 14.7792 14.817 18.3754 10.4259 18.3754Z" fill="black"></path>
                                            </svg>
                                        </a>
                                        <form method="GET"  action="{{route('search')}}" id="search_main_form">

                                        <input  @if ($q = app()->request->get('q')) value="{{$q}}" @endif
                                                class="classic-input classic-input__header_input classic-input__dropdown classic-input__header_input-black"
                                                placeholder="Поиск товара" type="text" name="q"
                                        >
                                        </form>
                                    </div>
                            </div>
                        </div>
                        <div class="uc-wrapper">
                            <div class="user-container">
                                {{-- Desktop --}}
                                <div class="user-container__actions">
                                    <a href="{{route('orders')}}">
                                        <div class="user-container__badge__new-messages"></div>
                                        <svg class="user-container__actions_action" viewBox="0 0 23 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M22.5 19.875C20.85 19.875 19.5 18.525 19.5 16.875V10.5C19.5 6.7125 16.95 3.5625 13.5 2.55V2.25C13.5 1.0125 12.4875 0 11.25 0C10.0125 0 9 1.0125 9 2.25V2.55C5.55 3.5625 3 6.7125 3 10.5V16.875C3 18.525 1.65 19.875 0 19.875V21.375H7.95C8.2875 22.875 9.6375 24 11.25 24C12.8625 24 14.2125 22.875 14.55 21.375H22.5V19.875ZM10.5 2.25C10.5 1.8375 10.8375 1.5 11.25 1.5C11.6625 1.5 12 1.8375 12 2.25V2.2875C11.7375 2.25 11.5125 2.25 11.25 2.25C10.9875 2.25 10.7625 2.25 10.5 2.25ZM11.25 22.5C10.5 22.5 9.825 22.05 9.525 21.375H12.975C12.675 22.05 12 22.5 11.25 22.5ZM3.3375 19.875C4.05 19.0875 4.5 18.0375 4.5 16.875V10.5C4.5 6.7875 7.5375 3.75 11.25 3.75C14.9625 3.75 18 6.7875 18 10.5V16.875C18 18.0375 18.45 19.0875 19.1625 19.875H3.3375Z"
                                                  fill="#3F3B3B"/>
                                        </svg>
                                    </a>
                                    <a href="{{route('cart.index')}}">
                                        <div class="user-container__badge__count-messages"></div>
                                        <svg class="user-container__actions_action basket-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.76329 0.688424C4.6622 0.365 4.36117 0.138428 4.01452 0.138428H0.923287L0.824867 0.144541C0.437991 0.192957 0.138672 0.523045 0.138672 0.923043L0.144785 1.02146C0.193201 1.40834 0.523289 1.70766 0.923287 1.70766H3.35467L5.8176 15.8271L5.84178 15.9269C5.94287 16.2503 6.2439 16.4769 6.59055 16.4769H21.0163L21.1179 16.4703C21.4511 16.427 21.7248 16.1736 21.7877 15.8358L23.8485 4.75886L23.8604 4.66297C23.8884 4.21888 23.5352 3.83074 23.0771 3.83074H5.31806L4.78747 0.788227L4.76329 0.688424ZM5.59129 5.39997H22.1328L20.3633 14.9077H7.24913L5.59129 5.39997ZM4.77552 20.967C4.77552 19.3725 6.04528 18.0725 7.62096 18.0725C9.19664 18.0725 10.4664 19.3725 10.4664 20.967C10.4664 22.5615 9.19664 23.8615 7.62096 23.8615C6.04528 23.8615 4.77552 22.5615 4.77552 20.967ZM8.89717 20.967C8.89717 20.231 8.32161 19.6417 7.62096 19.6417C6.92032 19.6417 6.34475 20.231 6.34475 20.967C6.34475 21.703 6.92032 22.2923 7.62096 22.2923C8.32161 22.2923 8.89717 21.703 8.89717 20.967ZM19.9859 18.0725C18.4102 18.0725 17.1405 19.3725 17.1405 20.967C17.1405 22.5615 18.4102 23.8615 19.9859 23.8615C21.5616 23.8615 22.8313 22.5615 22.8313 20.967C22.8313 19.3725 21.5616 18.0725 19.9859 18.0725ZM19.9859 19.6417C20.6865 19.6417 21.2621 20.231 21.2621 20.967C21.2621 21.703 20.6865 22.2923 19.9859 22.2923C19.2853 22.2923 18.7097 21.703 18.7097 20.967C18.7097 20.231 19.2853 19.6417 19.9859 19.6417Z" fill="#3F3B3B"/>
                                        </svg>
                                    </a>
                                </div>
                                <a href="/cabinet/profile">
                                    <div class="user-container__user">
                                        @php
                                            $logo=Auth::user()->avatar;
                                        @endphp
                                        <img src="{{asset('storage/'.$logo)}}"
                                             class="user-container__user-avatar"
                                             alt="user-avatar">

                                        <span>{{ Str::of(Auth::user()->username)->limit(12) }}</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-menu-wrapper">
            <div class="header-bottom-menu__container">
                <div class="header-bottom-menu">
                    <div style="display: flex;">
                        <div class="side-menu_sandwich">
                            >
                        </div>

                        <div class="header-bottom-menu-sm">
                            <div class="dropdown">
                                <button class="btn  dropdown-toggle header-bottom-menu-sm-button" type="button" id="dropdownMenu2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bars header-bottom-menu-sm-icon"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item h-sm-dr-item" type="button">
                                        <a href="{{route('catalog')}}">Каталог</a>
                                    </button>
                                    <button class="dropdown-item h-sm-dr-item" type="button">
                                        <a href="{{route('crop_guide')}}">
                                            Справочник
                                        </a>
                                    </button>
                                    <button class="dropdown-item h-sm-dr-item" type="button">
                                        <a href="{{route('about_us')}}"> О нас
                                        </a>
                                    </button>
                                    <button class="dropdown-item h-sm-dr-item" type="button">
                                        <a href="{{route('contacts')}}"> Контакты
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <ul class="nav">
                        <li class="button-dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle">
                                <div class="inner-addon">

                                    <svg class="glyphicon glyphicon-right" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.01"  fill="black"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7291 15H9.27079C6.66663 15 4.16663 12.5 4.16663 9.89587V8.43754C4.16663 5.83337 6.66663 3.33337 9.27079 3.33337H10.7291C13.3333 3.33337 15.8333 5.83337 15.8333 8.43754V9.89587C15.8333 12.5 13.3333 15 10.7291 15Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.6666 16.6667L14.075 13.75" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                    <form method="GET"  action="{{route('search')}}" id="search_main_form">

                                        <input  @if ($q = app()->request->get('q')) value="{{$q}}" @endif
                                                style="padding-left: 16px; color: white!important;"
                                                class="classic-input classic-input__header_input classic-input__dropdown classic-input__header_input-white"
                                                placeholder="Поиск товара" type="text" name="q"
                                        >
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


