<!-- accordion BOX -->
<div class="accordion">
    @foreach(DB::table('category')->where('featured',0)->get() as $key=>$item )
        <div class="accordion-tab">
            <input id="{{ $item->name }}" class="accordion-tab-cb" type="checkbox">
            <label for="{{ $item->name }}" class="accordion-tab__top-label">{{ $item->name }}</label>
            <div class="accordion-tab-content">
                @foreach(DB::table('category_items')->where('cat_id',$item->id)->get() as $value)
                    <div class="accordion-tab-content-item">
                        <div class="checkbox checkbox-square">
                            <input class="custom-checkbox" type="checkbox" value="{{ $value->id }}"  id="vo-menu-item-{{$value->id}}" name="ids">
                            <label for="vo-menu-item-{{$value->id}}">{{ $value->name }}</label>
                            <p>({{ count(DB::table('products_and_category_items')->where('cat_items_id',$value->id)->get()) }})</p>        
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@section('javascript')
    <script>
        var l = [];
        var all_data=[];
        var count=10000;
        var spin=$("#loader");
        var url='{{ route("getProducts")}}';
        $(document).ready(function(){
            if(count==10000){
                console.log(url);
                spin.show();
                $.get(url,function(response){
                    console.log("Count is equal to zero");
                    spin.hide();
                    product_jquery(response);
                });
            }
            count=0;
            $('#delete_btn').click(function(){
                spin.show();
                $(".custom-checkbox").each(function(){
                    $(this).prop("checked",false);
                });
                $.get(url,function(response){
                    spin.hide();
                    product_jquery(response);
                });
            });
            $(".custom-checkbox").click(function(){
                spin.show();
                $(".custom-checkbox").each(function(){
                    if($(this).is(":checked")){
                        l.push($(this).attr('value'));
                        count++;
                    }
                });
                if(l.length==0){
                    $.get(url,function(response){
                        console.log("l=[] "+' count:'+count);
                        spin.hide();
                        product_jquery(response);
                    });
                }else{
                    $.get('{{ route('getFilter') }}',{check:l},function(response){
                        if(response.status==404){
                            spin.hide();
                            console.log('404')
                            $('.catalog__cards').empty();
                            $('.catalog__cards').append(`Не найден`);
                            $('.catalog__pagination').empty();
                        }else{
                            console.log('success '+' count:'+count);
                            spin.hide();
                            product_jquery(response);
                        }
                    });
                }
                l=[];
                count=0;
            });
            function product_jquery(response){
                $('.catalog__cards').empty();
                if(response.status=='404'){
                    $('#alert_error').addClass('alert alert-danger');
                    $('#alert_error').append("<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times</button>");
                    $('#alert_error_span').text('Bunday xabar topilmadi!');
                }
                $('.catalog__pagination').empty();
                $('.catalog__pagination').append(response.paginate);
                    all_data=response.result.data;
                    response.result.data.forEach(items => {
                    var url_route='{{ route("catalog.product",":id") }}';
                    url_route=url_route.replace(":id",items.id);

                    $('.catalog__cards').append(
                    `
                        <div class="catalog__cards-card" style="height: max-content;">
                                <a class="catalog-link" href=${url_route}>
                                <div class="catalog__cards-card-title">${ items.name }</div></a>
                                <div class="catalog__cards-card-product-composition">
                                    ДВ: <span class="fw-600">  ${ items.get_active_substance.name }</span>
                                </div>
                                <div class="catalog__cards-card-producer">
                                    Производитель: <span class="fw-600"> ${ items.get_brand.name }</span></div>
                                <div class="d-flex justify-content-between align-items-baseline">
                                <div class="catalog__cards-card-price">₽ ${ items.price }</div>
                                    <a class="main-button_to-stock" data-id="${ items.id }">
                                        <svg width="25" height="24" viewBox="0 0 25 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M5.26305 0.688424C5.16196 0.365 4.86093 0.138428 4.51428 0.138428H1.42304L1.32462 0.144541C0.937747 0.192957 0.638428 0.523045 0.638428 0.923043L0.644541 1.02146C0.692957 1.40834 1.02305 1.70766 1.42304 1.70766H3.85443L6.31736 15.8271L6.34154 15.9269C6.44263 16.2503 6.74365 16.4769 7.09031 16.4769H21.5161L21.6177 16.4703C21.9509 16.427 22.2246 16.1736 22.2874 15.8358L24.3483 4.75886L24.3602 4.66297C24.3881 4.21888 24.035 3.83074 23.5769 3.83074H5.81781L5.28722 0.788227L5.26305 0.688424ZM6.09104 5.39997H22.6326L20.863 14.9077H7.74889L6.09104 5.39997ZM5.27528 20.967C5.27528 19.3725 6.54504 18.0725 8.12072 18.0725C9.6964 18.0725 10.9662 19.3725 10.9662 20.967C10.9662 22.5615 9.6964 23.8615 8.12072 23.8615C6.54504 23.8615 5.27528 22.5615 5.27528 20.967ZM9.39692 20.967C9.39692 20.231 8.82136 19.6417 8.12072 19.6417C7.42007 19.6417 6.84451 20.231 6.84451 20.967C6.84451 21.703 7.42007 22.2923 8.12072 22.2923C8.82136 22.2923 9.39692 21.703 9.39692 20.967ZM20.4857 18.0725C18.91 18.0725 17.6402 19.3725 17.6402 20.967C17.6402 22.5615 18.91 23.8615 20.4857 23.8615C22.0613 23.8615 23.3311 22.5615 23.3311 20.967C23.3311 19.3725 22.0613 18.0725 20.4857 18.0725ZM20.4857 19.6417C21.1863 19.6417 21.7619 20.231 21.7619 20.967C21.7619 21.703 21.1863 22.2923 20.4857 22.2923C19.785 22.2923 19.2094 21.703 19.2094 20.967C19.2094 20.231 19.785 19.6417 20.4857 19.6417Z"
                                            />
                                        </svg>
                                    </a>
                            </div>
                        </div>
                    `
                    );
                });
            }

        });
    </script>

@endsection
