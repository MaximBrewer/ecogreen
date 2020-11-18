@if ($paginator->lastPage() > 1)
<ul class="catalog__pagination-numbers" id="paginate_ul__paginate">
    <li id="{{ $paginator->url(1) }}" class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}"> 
        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M5.37325 0.276952C5.74586 -0.0923176 6.34841 -0.0923176 6.72102 0.276952C7.09299 0.646221 7.09299 1.24463 6.72102 1.6139L2.3 5.99968L6.72102 10.3861C7.09299 10.7554 7.09299 11.3538 6.72102 11.723C6.34841 12.0923 5.74586 12.0923 5.37325 11.723L0.278981 6.66816C-0.0929937 6.29889 -0.0929937 5.70048 0.278981 5.33121L5.37325 0.276952Z"
                fill="#202124"/>
        </svg>
    </li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li  id="{{ $paginator->url($i) }}" class=" {{ ($paginator->currentPage() == $i) ? ' catalog__pagination-numbers_active' : '' }} ">
            {{ $i }}
        </li>
    @endfor
    @if($paginator->currentPage())
        @php
            if($paginator->currentPage() == $paginator->lastPage()){
                $j=0;
            }else{
                $j=1;    
            }
        @endphp   
        <li id="{{ $paginator->url($paginator->currentPage()+$j) }}" class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">   
            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M1.62675 11.723C1.25414 12.0923 0.651592 12.0923 0.278981 11.723C-0.0929936 11.3538 -0.0929936 10.7554 0.278981 10.3861L4.7 6.00032L0.278981 1.6139C-0.0929936 1.24463 -0.0929936 0.646222 0.278981 0.276952C0.651592 -0.0923174 1.25414 -0.0923174 1.62675 0.276952L6.72102 5.33184C7.09299 5.70111 7.09299 6.29952 6.72102 6.66879L1.62675 11.723Z"
                    fill="#202124"/>
            </svg>
        </li>
    @endif
    <div>
        <script>
            $(document).ready(function(){
                $("ul.catalog__pagination-numbers li").click(function(){
                var paginate_url = $(this).attr("id");
                console.log(paginate_url);
                spinner.show();
                $.get(paginate_url, function(response) {
                    spinner.hide();
                    product_jquery_code_paginate(response);
                });

                });
                function product_jquery_code_paginate(response){
                $('.catalog__pagination').empty();
                $('.catalog__pagination').append(response.paginate);
                $('.catalog__cards').empty();
                    $.each(response.result.data, function(index,items){
                    var url_route='{{ route("catalog.product",":id") }}';
                    url_route=url_route.replace(":id",items.id);

                    $('.catalog__cards').append(
                    `
                    <div><div class="catalog__cards-card" style="height: max-content;">
                                <a class="catalog-link" href=${url_route}><div class="catalog__cards-card-title">${ items.name }</div></a>
                                <div class="catalog__cards-card-product-composition">
                                    ДВ: <span class="fw-600">  ${ items.get_active_substance.name }</span>
                                </div>
                                <div class="catalog__cards-card-producer">
                                    Производитель: <span class="fw-600"> ${ items.get_brand.name }</span></div>
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <div class="catalog__cards-card-price">₽ ${ items.price }</div>

                                    <a class="main-button_to-stock" data-id="${items.id}">
                                        <svg width="25" height="24" viewBox="0 0 25 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M5.26305 0.688424C5.16196 0.365 4.86093 0.138428 4.51428 0.138428H1.42304L1.32462 0.144541C0.937747 0.192957 0.638428 0.523045 0.638428 0.923043L0.644541 1.02146C0.692957 1.40834 1.02305 1.70766 1.42304 1.70766H3.85443L6.31736 15.8271L6.34154 15.9269C6.44263 16.2503 6.74365 16.4769 7.09031 16.4769H21.5161L21.6177 16.4703C21.9509 16.427 22.2246 16.1736 22.2874 15.8358L24.3483 4.75886L24.3602 4.66297C24.3881 4.21888 24.035 3.83074 23.5769 3.83074H5.81781L5.28722 0.788227L5.26305 0.688424ZM6.09104 5.39997H22.6326L20.863 14.9077H7.74889L6.09104 5.39997ZM5.27528 20.967C5.27528 19.3725 6.54504 18.0725 8.12072 18.0725C9.6964 18.0725 10.9662 19.3725 10.9662 20.967C10.9662 22.5615 9.6964 23.8615 8.12072 23.8615C6.54504 23.8615 5.27528 22.5615 5.27528 20.967ZM9.39692 20.967C9.39692 20.231 8.82136 19.6417 8.12072 19.6417C7.42007 19.6417 6.84451 20.231 6.84451 20.967C6.84451 21.703 7.42007 22.2923 8.12072 22.2923C8.82136 22.2923 9.39692 21.703 9.39692 20.967ZM20.4857 18.0725C18.91 18.0725 17.6402 19.3725 17.6402 20.967C17.6402 22.5615 18.91 23.8615 20.4857 23.8615C22.0613 23.8615 23.3311 22.5615 23.3311 20.967C23.3311 19.3725 22.0613 18.0725 20.4857 18.0725ZM20.4857 19.6417C21.1863 19.6417 21.7619 20.231 21.7619 20.967C21.7619 21.703 21.1863 22.2923 20.4857 22.2923C19.785 22.2923 19.2094 21.703 19.2094 20.967C19.2094 20.231 19.785 19.6417 20.4857 19.6417Z"
                                            />
                                        </svg>
                                    </a>
                            </div>
                        </div>
                    </div>
                    `);

                });
            }
            });
        </script>
    </div>
</ul>
@endif