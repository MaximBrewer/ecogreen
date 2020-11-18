<div class="footer">
    <div class="footer-contacts-wrapper">
        <div class="container footer-sm-contacts">
            <div class="footer-contacts">
                <div class="footer-contacts__block">
                    <span class="footer-contacts__block_header main_green-text">Номера телефона</span>
                    <ul class="main_grey-text">
                        <li>Телефон офиса: <a href="tel:+{{setting('site.phone_office')}}">{{setting('site.phone_office')}}</a></li>
                    </ul>
                </div>
                <div class="footer-contacts__block">
                    <span class="footer-contacts__block_header">Наш адрес:</span><br><br>
                        {!! nl2br(e(setting('site.address_office'))) !!}
                </div>
                <div class="footer-contacts__block">
                    <span class="footer-contacts__block_header main_green-text">Отправьте Нам Сообщение</span>
                    <ul class="main_grey-text">
                        <li>e-mail : <a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a></li>
                        <li>Сайт: <a href="{{ route('main') }}">www.ecogreen.ru</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-bottom">
            <div class="footer-bottom__block footer-bottom__block_about-company">
                <div class="footer-bottom__block-title">
                    О компании
                </div>
                {!! setting('site.us_company') !!}
            </div>
            <div class="footer-bottom__block footer-bottom__block_menu">
                <div class="footer-bottom__block-title">
                    Меню
                </div>
                <div class="footer-bottom__block_submenu">
                    <ul>
                        <li><a href="{{route('main')}}">Главная</a></li>
                        <li><a href="{{route('catalog')}}">Каталог</a></li>
                        <li><a href="{{route('crop_guide')}}">Справочник</a></li>
                        <li><a href="{{route('news')}}">Статьи</a></li>
                        <li><a href="{{route('about_us')}}">О нас</a></li>
                        <li><a href="{{route('contacts')}}">Контакты</a></li>
                        <li><a href="{{route('getbrands')}}">Производители</a></li>

                    </ul>
                    <div>
                        <div class="vertical-greyline"></div>
                        <ul class="footer_menu_items">
                            <li><a href="{{route('chemicals')}}">Химикаты</a></li>
                            <li><a href="{{route('substances')}}">Действующее вещество</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom__block footer-bottom__block_news">
                <div class="footer-bottom__block-title">
                    Новости
                </div>
                <div class="small-news">
                </div>
            </div>
            <div class="footer-bottom__block footer-bottom__block_subscribe">
                <div class="footer-bottom__block-title">
                    Подписаться
                </div>
                <div class="subscribe-container">
                    <div>
                        Вы можете подписаться на наши новости и узнавать все первыми.
                    </div>
                    <form id="subscribeForm" method="POST">
                        <div class="input-group">
                            <input type="text" class="classic-input__search_input classic-input__dropdown"
                                   placeholder="Оставить e-mail" aria-label="Recipient's username"
                                   aria-describedby="button-addon2" name="email" id="subscribeInput" value="">
                            <div class="input-group-append">
                                <button class="btn input-button input-button__green" type="button" id="subscribeBtn">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z"
                                              fill="white"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="social-icons">
                        <a href="https://instagram.com/{{setting('site.instagram')??'#'}}" target="_blank">
                        <svg class="social-icons-icon" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M12 0C5.4 0 0 5.4 0 12C0 18.6 5.4 24 12 24C18.6 24 24 18.6 24 12C24 5.4 18.6 0 12 0ZM12 22.5C6.225 22.5 1.5 17.775 1.5 12C1.5 6.225 6.225 1.5 12 1.5C17.775 1.5 22.5 6.225 22.5 12C22.5 17.775 17.775 22.5 12 22.5ZM15.975 5.9625C16.4625 6.15 16.8375 6.45 17.2125 6.7875C17.5875 7.125 17.85 7.5375 18.0375 8.025C18.225 8.5125 18.3 9 18.3375 9.6375C18.375 10.275 18.375 10.4625 18.375 12C18.375 13.5375 18.375 13.725 18.3375 14.3625C18.3375 15 18.225 15.4875 18.0375 15.975C17.85 16.4625 17.55 16.8375 17.2125 17.2125C16.875 17.5875 16.4625 17.85 15.975 18.0375C15.4875 18.225 15 18.3 14.3625 18.3375C13.725 18.375 13.5375 18.375 12 18.375C10.4625 18.375 10.275 18.375 9.6375 18.3375C9 18.3375 8.5125 18.225 8.025 18.0375C7.5375 17.85 7.1625 17.55 6.7875 17.2125C6.4125 16.875 6.15 16.4625 5.9625 15.975C5.775 15.4875 5.7 15 5.6625 14.3625C5.625 13.725 5.625 13.5375 5.625 12C5.625 10.4625 5.625 10.275 5.6625 9.6375C5.6625 9 5.775 8.5125 5.9625 8.025C6.15 7.5375 6.45 7.1625 6.7875 6.7875C7.125 6.4125 7.5375 6.15 8.025 5.9625C8.5125 5.775 9 5.7 9.6375 5.6625C10.275 5.625 10.4625 5.625 12 5.625C13.5375 5.625 13.725 5.625 14.3625 5.6625C15 5.6625 15.4875 5.775 15.975 5.9625ZM16.6125 15.4125C16.725 15.1875 16.8 14.8875 16.8375 14.2875C16.875 13.6875 16.875 13.5 16.875 12V9.75C16.8399 9.18899 16.7393 8.89025 16.6651 8.66987L16.65 8.625C16.5375 8.325 16.3875 8.1 16.1625 7.875C15.9375 7.65 15.7125 7.5 15.4125 7.3875C15.1875 7.275 14.8875 7.2 14.2875 7.1625C13.6875 7.125 13.5 7.125 12 7.125H9.75C9.18899 7.16006 8.89025 7.2607 8.66987 7.33494L8.625 7.35C8.325 7.4625 8.1 7.6125 7.875 7.8375C7.65 8.0625 7.5 8.2875 7.3875 8.5875C7.275 8.8125 7.2 9.1125 7.1625 9.7125C7.125 10.3125 7.125 10.5 7.125 12V14.25C7.16006 14.811 7.2607 15.1097 7.33494 15.3301L7.35 15.375C7.4625 15.675 7.6125 15.9 7.8375 16.125C8.0625 16.35 8.2875 16.5 8.5875 16.6125C8.8125 16.725 9.1125 16.8 9.7125 16.8375C10.3125 16.875 10.5 16.875 12 16.875H14.25C14.811 16.8399 15.1097 16.7393 15.3301 16.6651L15.375 16.65C15.675 16.5375 15.9 16.3875 16.125 16.1625C16.35 15.9375 16.5 15.7125 16.6125 15.4125ZM15.9 8.8125C15.9 9.206 15.581 9.525 15.1875 9.525C14.794 9.525 14.475 9.206 14.475 8.8125C14.475 8.419 14.794 8.1 15.1875 8.1C15.581 8.1 15.9 8.419 15.9 8.8125ZM12 8.7C10.1625 8.7 8.7 10.1625 8.7 12C8.7 13.8375 10.1625 15.3 12 15.3C13.8375 15.3 15.3 13.8375 15.3 12C15.3 10.1625 13.8375 8.7 12 8.7ZM12 13.8C11.025 13.8 10.2 12.975 10.2 12C10.2 11.025 11.025 10.2 12 10.2C12.975 10.2 13.8 11.025 13.8 12C13.8 12.975 12.975 13.8 12 13.8Z"
                                  fill="#4A785A"/>
                        </svg>
                        </a>
                        <a href="https://facebook.com{{setting('site.facebook')??'#'}}" target="_blank">
                        <svg class="social-icons-icon" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M12 0C18.6 0 24 5.4 24 12C24 18.6 18.6 24 12 24C5.4 24 0 18.6 0 12C0 5.4 5.4 0 12 0ZM12 1.5C6.225 1.5 1.5 6.225 1.5 12C1.5 17.775 6.225 22.5 12 22.5C17.775 22.5 22.5 17.775 22.5 12C22.5 6.225 17.775 1.5 12 1.5ZM13.425 6.375C14.175 6.375 14.8125 6.4125 15 6.45V8.25H13.9125C13.05 8.25 12.9 8.6625 12.9 9.225V10.5H14.925L14.6625 12.4875H12.9V17.625H10.7625V12.4875H9V10.5H10.8V9C10.8 7.3125 11.85 6.375 13.425 6.375Z"
                                  fill="#4A785A"/>
                        </svg>
                        </a>
                        <a href="https://twitter.com{{setting('site.twitter')??'#'}}" target="_blank">
                            <svg class="social-icons-icon" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M12 24C5.4 24 0 18.6 0 12C0 5.4 5.4 0 12 0C18.6 0 24 5.4 24 12C24 18.6 18.6 24 12 24ZM12 1.5C6.225 1.5 1.5 6.225 1.5 12C1.5 17.775 6.225 22.5 12 22.5C17.775 22.5 22.5 17.775 22.5 12C22.5 6.225 17.775 1.5 12 1.5ZM16.575 8.6625C17.1 8.625 17.55 8.475 18 8.2875C17.6625 8.775 17.25 9.225 16.8 9.5625V9.8625C16.8 13.125 14.325 16.875 9.7875 16.875C8.4 16.875 7.0875 16.5 6 15.7875C6.1875 15.825 6.41249 15.825 6.59999 15.825H6.6C7.7625 15.825 8.85 15.45 9.675 14.775C8.625 14.7375 7.6875 14.025 7.3875 13.05C7.5375 13.0875 7.68749 13.0875 7.83749 13.0875H7.8375C8.03392 13.0875 8.20177 13.0589 8.39093 13.0267C8.41845 13.022 8.44642 13.0173 8.475 13.0125C7.35 12.7875 6.4875 11.8125 6.4875 10.6125V10.575C6.825 10.7625 7.2 10.875 7.6125 10.875C6.975 10.425 6.525 9.675 6.525 8.8125C6.525 8.3625 6.6375 7.95 6.8625 7.575C8.0625 9.075 9.8625 10.05 11.925 10.1625C11.8875 9.975 11.85 9.7875 11.85 9.6C11.85 8.2125 12.975 7.125 14.325 7.125C15 7.125 15.6375 7.425 16.0875 7.9125C16.65 7.8 17.175 7.6125 17.6625 7.3125C17.475 7.875 17.1 8.3625 16.575 8.6625Z"
                                  fill="#4A785A"/>
                        </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-politics-wrapper">
        <div class="container">
            <hr>
            <div class="footer-politics">
                <div class="footer-politics__left">
                    @foreach(DB::table('content_menus')->where('status','=',0)->get() as $footer_menu)
                        <span><a href="{{route('content',$footer_menu->slug)}}">{{$footer_menu->name}}</a></span>
                    @endforeach
                </div>
                <div class="footer-politics__right">
                    © {{date('Y')}} «ООО Экогрин” Все права защищены
                </div>
            </div>
        </div>
    </div>
</div>
@section('java__script')
    <script>
        $(document).ready(function(){
            var url_menus='{{ route("footer.menus") }}';
            var url_news='{{ route("footer.news") }}';

            //get footer menus
            $.ajax({
                url:url_menus,
                method:'GET',
                dataType:'JSON',
                success: function(response){
                    response.result.forEach(menus => {
                        $('.footer_menu_items').append(
                            `
                        <li><a href="/${menus.slug}">${menus.name}</a></li>
                    `);
                    });
                }
            });
            //get footer news
            $.ajax({
                url:url_news,
                method:'GET',
                dataType:'JSON',
                success: function(response){
                    response.result.forEach(news => {
                        var image_url =checkImage(news.image);
                        var date = format_Date(news.created_at);
                        var title = cut_title(news.title, 16);
                        $('.small-news').append(
                            `
                          <a href="/news/${news.slug}" >
                            <div class="small-news__item">
                            <img src="${image_url}" alt="">
                                <div class="small-news__content"  style="width: 100%;">
                                    ${title} <br>
                                    <span class="main_orange-text">${date}</span>
                                    <hr>
                                </div>
                            </div>
                          </a>
                        `);
                    });
                }
            });
            function cut_title(text, count){
                return text.slice(0, count) + (text.length > count ? "..." : "");
            }
            function format_Date(orginaldate) {
                var date = new Date(orginaldate);
                var day = date.getDate();
                var month = date.getMonth() + 1;
                var year = date.getFullYear();
                if (day < 10) {
                    day = "0" + day;
                }
                if (month < 10) {
                    month = "0" + month;
                }
                var date =  day + "." + month + "." + year;
                return date;
            }
            function checkImage(image) {
                if (image == null){
                    return '{{asset("assets/z4.png")}}';
                }
                let image_url='{{asset("storage/".":image")}}';

                return image_url.replace(':image',image);
            }
            //Subscribe submit
            $('#subscribeBtn').click(function () {
                var sub_url = '{{route('subscribe')}}';
                var email = $('#subscribeInput').val();
                var spinner=$('#loader');
                $.ajax({
                    url: sub_url,
                    type: 'POST',
                    data:{email:email},
                    dataType:'JSON',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response){
                        spinner.hide();
                        message = response.message;
                        if(response.warning === true){
                            toastr.warning(message)
                        }else if(response.error === true){
                            toastr.error(message);
                        }else{
                            toastr.success(message);
                        }
                        console.log(message);
                    },
                    error: function(response){
                        spinner.hide();
                        message = response;
                        toastr.error(message);
                        console.log(message);
                    }
                });
            });
        });
    </script>
@endsection
