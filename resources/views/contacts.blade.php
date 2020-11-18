@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="breadcrubms">
            <a href="/">Главная</a>
            /
            <a href="{{route('contacts')}}">Контакты</a>
        </div>
        <h2 class="main_grey-text text-page__top-h">Контакты</h2>
        <div class="contacts slider">
            <div class="contacts-switcher">
                <div class="contacts-switcher__item" id="office">Офис</div>
                <div class="contacts-switcher__item" id="ware">Склад</div>
            </div>
            <ul class="slides">
                <li>
                    <div class="contacts-text">
                        <div class="contacts-text__item">
                            <svg width="24" height="34" viewBox="0 0 24 34" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M0.333374 11.6667C0.333374 5.21667 5.55004 0 12 0C18.45 0 23.6667 5.21667 23.6667 11.6667C23.6667 20.4167 12 33.3333 12 33.3333C12 33.3333 0.333374 20.4167 0.333374 11.6667ZM7.83337 11.6667C7.83337 13.9667 9.70004 15.8333 12 15.8333C14.3 15.8333 16.1667 13.9667 16.1667 11.6667C16.1667 9.36667 14.3 7.5 12 7.5C9.70004 7.5 7.83337 9.36667 7.83337 11.6667Z"
                                      fill="#515151"/>
                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                      height="34">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M0.333374 11.6667C0.333374 5.21667 5.55004 0 12 0C18.45 0 23.6667 5.21667 23.6667 11.6667C23.6667 20.4167 12 33.3333 12 33.3333C12 33.3333 0.333374 20.4167 0.333374 11.6667ZM7.83337 11.6667C7.83337 13.9667 9.70004 15.8333 12 15.8333C14.3 15.8333 16.1667 13.9667 16.1667 11.6667C16.1667 9.36667 14.3 7.5 12 7.5C9.70004 7.5 7.83337 9.36667 7.83337 11.6667Z"
                                          fill="white"/>
                                </mask>
                                <g mask="url(#mask0)">
                                </g>
                            </svg>
                            <br>
                            <div class="contacts-text__item-title">Адрес</div>
                            {!! nl2br(e(setting('site.address_office'))) !!}
                        </div>

                        <div class="contacts-text__item">
                            <svg width="30" height="31" viewBox="0 0 30 31" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M28.3333 21.5001C26.25 21.5001 24.25 21.1667 22.3833 20.5501C21.8 20.3667 21.15 20.5001 20.6833 20.9501L17.0167 24.6167C12.3 22.2167 8.43333 18.3667 6.03333 13.6501L9.7 9.96675C10.1667 9.51675 10.3 8.86675 10.1167 8.28341C9.5 6.41675 9.16667 4.41675 9.16667 2.33341C9.16667 1.41675 8.41667 0.666748 7.5 0.666748H1.66667C0.75 0.666748 0 1.41675 0 2.33341C0 17.9834 12.6833 30.6667 28.3333 30.6667C29.25 30.6667 30 29.9167 30 29.0001V23.1667C30 22.2501 29.25 21.5001 28.3333 21.5001ZM13.3333 10.6667H16.6667V14.0001H13.3333V10.6667ZM20 10.6667H23.3333V14.0001H20V10.6667ZM26.6667 14.0001V10.6667H30V14.0001H26.6667Z"
                                      fill="#515151"/>
                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="30"
                                      height="31">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M28.3333 21.5001C26.25 21.5001 24.25 21.1667 22.3833 20.5501C21.8 20.3667 21.15 20.5001 20.6833 20.9501L17.0167 24.6167C12.3 22.2167 8.43333 18.3667 6.03333 13.6501L9.7 9.96675C10.1667 9.51675 10.3 8.86675 10.1167 8.28341C9.5 6.41675 9.16667 4.41675 9.16667 2.33341C9.16667 1.41675 8.41667 0.666748 7.5 0.666748H1.66667C0.75 0.666748 0 1.41675 0 2.33341C0 17.9834 12.6833 30.6667 28.3333 30.6667C29.25 30.6667 30 29.9167 30 29.0001V23.1667C30 22.2501 29.25 21.5001 28.3333 21.5001ZM13.3333 10.6667H16.6667V14.0001H13.3333V10.6667ZM20 10.6667H23.3333V14.0001H20V10.6667ZM26.6667 14.0001V10.6667H30V14.0001H26.6667Z"
                                          fill="white"/>
                                </mask>
                                <g mask="url(#mask0)">
                                </g>
                            </svg>
                            <br>
                            <div class="contacts-text__item-title">Номера телефонов</div>
                            Тел. <a href="tel:+{{setting('site.phone_office')}}">{{setting('site.phone_office')}}</a> <br>
                            Факс <a href="tel:+{{setting('site.fax_office')}}">{{setting('site.fax_office')}}</a>
                        </div>

                        <div class="contacts-text__item">
                            <svg width="34" height="27" viewBox="0 0 34 27" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.66671 0.333252H30.3334C32.1667 0.333252 33.6667 1.83325 33.6667 3.66659V23.6666C33.6667 25.4999 32.1667 26.9999 30.3334 26.9999H3.66671C1.83337 26.9999 0.333374 25.4999 0.333374 23.6666L0.350041 3.66659C0.350041 1.83325 1.83337 0.333252 3.66671 0.333252ZM17 15.3333L30.3334 6.99992V3.66659L17 11.9999L3.66671 3.66659V6.99992L17 15.3333Z"
                                      fill="#515151"/>
                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="34"
                                      height="27">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M3.66671 0.333252H30.3334C32.1667 0.333252 33.6667 1.83325 33.6667 3.66659V23.6666C33.6667 25.4999 32.1667 26.9999 30.3334 26.9999H3.66671C1.83337 26.9999 0.333374 25.4999 0.333374 23.6666L0.350041 3.66659C0.350041 1.83325 1.83337 0.333252 3.66671 0.333252ZM17 15.3333L30.3334 6.99992V3.66659L17 11.9999L3.66671 3.66659V6.99992L17 15.3333Z"
                                          fill="white"/>
                                </mask>
                                <g mask="url(#mask0)">
                                </g>
                            </svg>
                            <br>
                            <div class="contacts-text__item-title">Куда написать</div>
                            e-mail : <a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a> <br>
                            Сайт: <a href="/">www.ecogreen.ru</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="contacts-text">
                        <div class="contacts-text__item">
                            <svg width="24" height="34" viewBox="0 0 24 34" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M0.333374 11.6667C0.333374 5.21667 5.55004 0 12 0C18.45 0 23.6667 5.21667 23.6667 11.6667C23.6667 20.4167 12 33.3333 12 33.3333C12 33.3333 0.333374 20.4167 0.333374 11.6667ZM7.83337 11.6667C7.83337 13.9667 9.70004 15.8333 12 15.8333C14.3 15.8333 16.1667 13.9667 16.1667 11.6667C16.1667 9.36667 14.3 7.5 12 7.5C9.70004 7.5 7.83337 9.36667 7.83337 11.6667Z"
                                      fill="#515151"/>
                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                      height="34">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M0.333374 11.6667C0.333374 5.21667 5.55004 0 12 0C18.45 0 23.6667 5.21667 23.6667 11.6667C23.6667 20.4167 12 33.3333 12 33.3333C12 33.3333 0.333374 20.4167 0.333374 11.6667ZM7.83337 11.6667C7.83337 13.9667 9.70004 15.8333 12 15.8333C14.3 15.8333 16.1667 13.9667 16.1667 11.6667C16.1667 9.36667 14.3 7.5 12 7.5C9.70004 7.5 7.83337 9.36667 7.83337 11.6667Z"
                                          fill="white"/>
                                </mask>
                                <g mask="url(#mask0)">
                                </g>
                            </svg>
                            <br>
                            <div class="contacts-text__item-title">Адрес</div>
                            {!! nl2br(e(setting('site.address_warehouse'))) !!}
                        </div>

                        <div class="contacts-text__item">
                            <svg width="30" height="31" viewBox="0 0 30 31" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M28.3333 21.5001C26.25 21.5001 24.25 21.1667 22.3833 20.5501C21.8 20.3667 21.15 20.5001 20.6833 20.9501L17.0167 24.6167C12.3 22.2167 8.43333 18.3667 6.03333 13.6501L9.7 9.96675C10.1667 9.51675 10.3 8.86675 10.1167 8.28341C9.5 6.41675 9.16667 4.41675 9.16667 2.33341C9.16667 1.41675 8.41667 0.666748 7.5 0.666748H1.66667C0.75 0.666748 0 1.41675 0 2.33341C0 17.9834 12.6833 30.6667 28.3333 30.6667C29.25 30.6667 30 29.9167 30 29.0001V23.1667C30 22.2501 29.25 21.5001 28.3333 21.5001ZM13.3333 10.6667H16.6667V14.0001H13.3333V10.6667ZM20 10.6667H23.3333V14.0001H20V10.6667ZM26.6667 14.0001V10.6667H30V14.0001H26.6667Z"
                                      fill="#515151"/>
                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="30"
                                      height="31">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M28.3333 21.5001C26.25 21.5001 24.25 21.1667 22.3833 20.5501C21.8 20.3667 21.15 20.5001 20.6833 20.9501L17.0167 24.6167C12.3 22.2167 8.43333 18.3667 6.03333 13.6501L9.7 9.96675C10.1667 9.51675 10.3 8.86675 10.1167 8.28341C9.5 6.41675 9.16667 4.41675 9.16667 2.33341C9.16667 1.41675 8.41667 0.666748 7.5 0.666748H1.66667C0.75 0.666748 0 1.41675 0 2.33341C0 17.9834 12.6833 30.6667 28.3333 30.6667C29.25 30.6667 30 29.9167 30 29.0001V23.1667C30 22.2501 29.25 21.5001 28.3333 21.5001ZM13.3333 10.6667H16.6667V14.0001H13.3333V10.6667ZM20 10.6667H23.3333V14.0001H20V10.6667ZM26.6667 14.0001V10.6667H30V14.0001H26.6667Z"
                                          fill="white"/>
                                </mask>
                                <g mask="url(#mask0)">
                                </g>
                            </svg>
                            <br>
                            <div class="contacts-text__item-title">Номера телефонов</div>
                            Тел. <a href="tel:+{{setting('site.phone_warehouse')}}">{{setting('site.phone_warehouse')}}</a> <br>
                            Факс <a href="tel:+{{setting('site.fax_warehouse')}}">{{setting('site.fax_warehouse')}}</a>
                        </div>

                        <div class="contacts-text__item">
                            <svg width="34" height="27" viewBox="0 0 34 27" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.66671 0.333252H30.3334C32.1667 0.333252 33.6667 1.83325 33.6667 3.66659V23.6666C33.6667 25.4999 32.1667 26.9999 30.3334 26.9999H3.66671C1.83337 26.9999 0.333374 25.4999 0.333374 23.6666L0.350041 3.66659C0.350041 1.83325 1.83337 0.333252 3.66671 0.333252ZM17 15.3333L30.3334 6.99992V3.66659L17 11.9999L3.66671 3.66659V6.99992L17 15.3333Z"
                                      fill="#515151"/>
                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="34"
                                      height="27">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M3.66671 0.333252H30.3334C32.1667 0.333252 33.6667 1.83325 33.6667 3.66659V23.6666C33.6667 25.4999 32.1667 26.9999 30.3334 26.9999H3.66671C1.83337 26.9999 0.333374 25.4999 0.333374 23.6666L0.350041 3.66659C0.350041 1.83325 1.83337 0.333252 3.66671 0.333252ZM17 15.3333L30.3334 6.99992V3.66659L17 11.9999L3.66671 3.66659V6.99992L17 15.3333Z"
                                          fill="white"/>
                                </mask>
                                <g mask="url(#mask0)">
                                </g>
                            </svg>
                            <br>
                            <div class="contacts-text__item-title">Куда написать</div>
                            e-mail : <a href="mailto:{{setting('site.email_warehouse')}}">{{setting('site.email_warehouse')}}</a> <br>
                            Сайт: <a href="/">www.ecogreen.ru</a>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>

    <div alt="map" class="contacts-map" id="map_office" >
        <iframe src="{{setting('site.map_office')}}" width="100%" height="400" frameborder="0"></iframe>
    </div>
    <div alt="map" class="contacts-map" id="map_ware" >
        <iframe src="{{setting('site.map_warehouse')}}" width="100%" height="400" frameborder="0"></iframe>
    </div>
    <script>
        $('.contacts').flexslider({
            animation: "fade",
            slideshow: false,
            animationSpeed: 0,
            directionNav: false,
            controlsContainer: ".container",
            controlNav: true,
            manualControls: ".contacts-switcher .contacts-switcher__item"
        });
    </script>
    <script>
        var map_office = $('#map_office');
        var map_ware = $('#map_ware');
        $(document).ready(function () {
            $(map_ware).toggle();
            // $(map_ware).find("*").prop('disabled',true);
            $('#office').click(function () {
                $(map_office).toggle();
                $(map_ware).toggle();
            });
            $('#ware').click(function () {
                // $('.contacts-map').toggle();
                $(map_ware).toggle();
                $(map_office).toggle();
            });
        });

    </script>
@endsection
