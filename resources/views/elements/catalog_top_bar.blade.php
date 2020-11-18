<div class="catalog__top-bar">
    <div class="catalog__strange-useless-aligner">
        <h2 class="main_grey-text catalog__title">Средства защиты растений</h2>
        <div class="search-filter">
            <div class="search-filter__sort-box">
                <div class="green-select">
                    <span class="sort-by">Сортировать по:</span>
                    <div class="select_mate" data-mate-select="active">
                         <select name="sort_filter" onchange="" onclick="return false;"  id="select_order">
                            <option value="3">Возрастанию цены</option>
                            <option value="2">Убыванию цены</option>
                            <option value="1">Дате</option>
                        </select>
                        <p class="selecionado_opcion" onclick="open_select(this)"></p>
                        <span onclick="open_select(this)" class="icon_select_mate">
                            <svg fill="#000000"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    width="24"
                                    xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                            <path d="M0-.75h24v24H0z" fill="none"/>
                            </svg>
                        </span>
                        <div class="cont_list_select_mate">
                            <ul class="cont_select_int"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog__top-bar-container">
        <div class="form-group inner-addon max-content">
            <a class="catalog_searchbar__button" onclick="$('.catalog_searchbar__form').submit();">
                <svg viewBox="0 0 24 24" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M17.6183 16.5584C19.0189 14.8927 19.8896 12.7729 19.8896 10.4259C19.8896 5.23975 15.6498 1 10.4259 1C5.20189 1 1 5.23975 1 10.4259C1 15.612 5.23975 19.8517 10.4259 19.8517C12.7729 19.8517 14.8927 19.0189 16.5584 17.5804L21.5096 22.6956C21.8003 22.9959 22.2806 22.9998 22.5762 22.7042C22.8657 22.4147 22.8687 21.9463 22.583 21.6531L17.6183 16.5584ZM10.4259 18.3754C6.07256 18.3754 2.5142 14.817 2.5142 10.4259C2.5142 6.0347 6.07256 2.5142 10.4259 2.5142C14.7792 2.5142 18.3375 6.07256 18.3375 10.4259C18.3375 14.7792 14.817 18.3754 10.4259 18.3754Z"
                      fill="black"/>
            </svg>
            </a>
            <form class="catalog_searchbar__form" method="GET" action="{{route('search')}}">
                <input class="classic-input form-control catalog__top-bar-container-search-input" type="text"
                       style="padding-left: 16px" placeholder="Введите фразу для поиска" name="q" id="search_sidebar"
                       @if ($q = app()->request->get('q')) value="{{$q}}" @endif
                >
            </form>
        </div>
        <div class="letter-tosearch-wrapper">
            <div class="letter-tosearch">
                @php
                    $letters=[
                        "А","Б","В","Г","Д","Е","Ё","Ж","З","И","К","Л","М","Н","О",
                        "П","Р","С","Т","У","Ф","Х","Ц","Ч","Ш","Щ","Э","Ю","Я"
                    ];
                @endphp
                <ul id="get_letters">
                    @for ($i = 0; $i < count($letters); $i++)
                        <li href="#" value="{{ $letters[$i] }}">{{ $letters[$i] }}</li>
                    @endfor
                </ul>
            </div>
            <span>Вы так же можете отсортировать товар по алфавитному порядку. Просто выберите нужную букву и нажмите на нее.</span>
        </div>
    </div>
</div>
