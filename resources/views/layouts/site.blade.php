@extends('layouts.head')
@section('site')
    <body>
    <div>
        <main>
            @include('header')
            @yield('content')
            @include('footer')
            <div id="loader"></div>
        </main>
    </div>
    <script src="{{asset('assets/js/file-input.js')}}"></script>
    <script src="{{asset('assets/js/select.js')}}"></script>
    <script>
        $(document).ready(function(){
            $("#request_modal_auth").click(function(){
                $.get('{{route('modal')}}', function(response) {
                if (response.result===true) {
                    $('#email').val(response.data.email);
                    $('#fio').val(response.data.name);
                }else{
                    $('#email').val("Default");
                    $('#fio').val("Default");
                }
            });
            });
        });
    </script>
    @yield('javascript')
    @yield('java_script')
    @yield('java__script')
    @yield('java___script')
    @yield('java____script')
    <script>
        var spinner=$('#loader');
        $(document).on('click','.main-button_to-stock, #product_add_to_cart',function () {
            // add product to cart with ajax query
                    spinner.show();
                    var id = $(this).data('id');
                    var packing_id = $('#packing_id').val();
                    var url='{{ (\Auth::user()) ? route("cart.store", ":id") : route("cart.guest.store", ":id") }}';
                    var count_url = '{{route("cart.count")}}';
                    url=url.replace(":id",id);
                    $.ajax({
                        url:url,
                        method:'POST',
                        data: {packing:packing_id},
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        dataType:'JSON',
                        success: function(response){
                            spinner.hide();
                            toastr.success(response.message);
                            //get and set count cart items
                            changeCountCart();
                        },
                        error: function (response) {
                            spinner.hide();
                            toastr.warning(response.message);
                        }
                    });
                    function changeCountCart() {
                        $.ajax({
                            url:count_url,
                            method:'GET',
                            dataType:'JSON',
                            success: function(response){
                                var count = response.result;
                                $('.user-container__badge__count-messages').css('display','flex').text(count);
                            },
                            error:function(response){
                                console.log(response);
                            }
                        });
                    }

        });
    </script>
    @include('elements.notification')
    </body>
@endsection
