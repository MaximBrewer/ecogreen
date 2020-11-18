<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ЭкоГрин</title>
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
    <link href="{{ asset('/css/app.css')}}" rel="stylesheet" type="text/css">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

    <script src="{{asset('assets/js/dropdown.js')}}"></script>
    {{-- for multiupload docs in Cabinet.docs.add.modal ----BEGIN--}}
    <script type="text/javascript" src="{{asset('assets/js/swfupload/swfupload.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.swfupload.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/swfupload/swfupload.queue.js')}}"></script>
    {{-- for multiupload docs in Cabinet.docs.add.modal ----END--}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    {{-- for progress bar--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    {{--    gallery--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet" type="text/css">

    <script src="https://unpkg.com/accordion-js@2.8.0/dist/accordion.min.js"></script>

    {{--    jq validation--}}
    <script src="{{asset('assets/js/jv/src/core.js')}}"></script>

    <style>
        #loader{
            display:none;
            position:fixed;
            top:0;
            left:0;
            right:0;
            bottom:0;
            width:100%;
            /*background:#6b6b6b url(/gifs/loader4.gif) no-repeat center center;*/
            background-color: rgba(255,255,255,0.3);
            z-index:1000;
        }
    </style>
    {{--    input-mask--}}
    <script src="{{asset('assets/js/jquery.inputmask.bundle.min.js')}}"></script>
</head>
@yield('site')
</html>
@yield('custom-scripts')
<script>
    $(document).ready(function () {
        //маски для инпутов
        $('.phone-masked').inputmask({
            mask: "+7 (999) 999-99-99",
        });
        $('.email-masked').inputmask({ alias: "email"});
    });
</script>
<script>
    $(document).ready(function(){

        var url ='{{ route("new_messages") }}';
        var count;
        var latest_id = null;
        //we define our function and STORE it in a var
        var ajaxFn = function () {
            $.ajax({
                url:url,
                method:'GET',
                dataType:'JSON',
                success: function(response){

                    var result = response.result;
                    var latest = response.latest;
                    if (result === 0 || result === null){
                        $('.user-container__badge__new-messages').css('display','none');
                    }
                    else if(result !== count){
                        count = response.result;
                        jquery_code(response);
                    }
                    if(latest){
                        if(latest.id !== latest_id){
                            latest_id = latest.id;
                            $('#latest_chat_comment').text(latest.message);
                        }
                    }
                },
                error:function(response){
                    console.log(response);
                }
            });
        }
        ajaxFn();
        setInterval(ajaxFn, 10000);

        function jquery_code(response){
            $('.user-container__badge__new-messages').css('display','flex');
            //set message notify content in bottom_right corner of site
            var latest = response.latest;
            if(latest !== null ){

                var sender_avatar = '{{"/storage/:avatar"}}';
                var sender_name = latest.sender.name;
                sender_avatar = sender_avatar.replace(":avatar",latest.sender.avatar);
                var message = latest.message;
                var created_at = latest.createdAtDateHumanReadable;
                $('.popup-container').empty();
                $('.popup-container').html(
                    `
                    <div class="popup-message animate__animated animate__fadeInRight animate__faster">
                        <div class="order-manager">
                            <div class="d-flex" onclick="document.location.href = '/cabinet/questions';">
                                <div class="user-online">
                                    <div class="user-online-circle user-online-circle-online">
                                    </div>
                                    <img class="order-manager__avatar" src="${sender_avatar}" alt="user-avatar">
                                </div>
                                <div class="order-manager__info-wrapper">
                                    <span class="order-manager__name">${sender_name}</span>
                                    <span class="order-manager__message">${message}</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="order-manager__time">
                                    ${created_at}
                                </div>
                                <div class="order-manager__msg-count">
                                    ${count}
                                </div>
                            </div>
                            <div class="popup-message__close-btn"><i class="fas fa-times"></i></div>
                        </div>
                    </div>
                    `
                );
            }
        }
        // Ajax for update count in cart header icon
        var count_url = '{{route("cart.count")}}'
        $.ajax({
            url:count_url,
            method:'GET',
            dataType:'JSON',
            success: function(response){
                var count = response.result;
                if(count !== 0){
                    $('.user-container__badge__count-messages').css('display','flex').text(count);
                }
            },
            error:function(response){
                console.log(response);
            }
        });
    });
</script>
{{-- <script type="text/javascript">
        function getPaginateUrl(url){
                console.log(url);
            }
    </script> --}}

