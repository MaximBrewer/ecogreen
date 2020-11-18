@extends('layouts.cabinet')

@section('cabinet_content')
    <div class="cabinet-container">
        <div class="cabinet__top-h">
            <div class="breadcrubms">
                <a href="/">Главная</a>
                /
                <a href="/cabinet/profile">Личный кабинет</a>
            </div>
            <h2 class="main_grey-text text-page__top-h">Документы</h2>
        </div>
    </div>
    <div class="cabinet-container">
        <div id="alert_message"></div>
        <div class="profile">
            @include('elements.profile_info')

            <div class="profile-docs">
                <div class="profile-docs__list">
                    @foreach($contents as $key=>$value)
                        @php
                            $array=explode('"',$value->file);
                            $file_name=$array[7];
                            $type=explode(".",$file_name)[1];
                        @endphp
                        @if($type=="jpg" || $type=="jpeg" || $type=="png" || $type=="bmp" || $type=="gif" || $type=="svg" || $type=="ico")
                            @php
                                $document=DB::table('rekvizits')->where('id',$value->id)->first();
                                $file_path=explode('"',$document->file)[3];
                            @endphp
                            <a class="swiper-slide" href="{{asset('storage/'.$file_path)}}" data-toggle="lightbox"
                            data-gallery="example-gallery">
                                <img class="img-fluid" src="{{asset('storage/'.$file_path)}}" alt="certificate">
                            </a>
                        @else
                            <div class="order-documents__item">
                                <svg width="24" height="30" viewBox="0 0 24 30" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M24 3.83097L20.0596 0H18H2.57143C1.15127 0 0 1.11929 0 2.5V27.5C0 28.8807 1.15127 30 2.57143 30H21.4286C22.8487 30 24 28.8807 24 27.5V5.83333V3.83097ZM22.8 4.66667L22.8 4.31417L19.5626 1.16667H19.2V4.66667H22.8ZM18 1.16667V5.83333H22.8V27.5L22.7944 27.6214C22.7313 28.3009 22.1439 28.8333 21.4286 28.8333H2.57143L2.4466 28.8279C1.74768 28.7666 1.2 28.1955 1.2 27.5V2.5L1.2056 2.37864C1.26867 1.69913 1.85609 1.16667 2.57143 1.16667H18ZM14.6139 14.9959C14.6139 16.904 13.4904 17.9918 12.0239 17.9918C10.5493 17.9918 9.43386 16.8954 9.43386 14.9959C9.43386 13.0879 10.5493 12 12.0239 12C13.4904 12 14.6139 13.0879 14.6139 14.9959ZM5.96073 17.9121C7.64598 17.9121 8.66685 16.8128 8.66685 14.9902C8.66685 13.1733 7.64598 12.0797 5.97693 12.0797H4V17.9121H5.96073ZM5.91211 16.8556H5.16941V13.1363H5.91481C6.95189 13.1363 7.50014 13.6945 7.50014 14.9902C7.50014 16.2917 6.95189 16.8556 5.91211 16.8556ZM12.0239 16.9011C11.1731 16.9011 10.6195 16.2319 10.6195 14.9959C10.6195 13.76 11.1731 13.0907 12.0239 13.0907C12.8719 13.0907 13.4282 13.76 13.4282 14.9959C13.4282 16.2319 12.8719 16.9011 12.0239 16.9011ZM20.3583 15.9243C20.2314 16.998 19.3752 17.9918 17.9574 17.9918C16.4774 17.9918 15.3809 16.8983 15.3809 14.9959C15.3809 13.0879 16.4963 12 17.9574 12C19.2375 12 20.2044 12.7746 20.3583 14.1216H19.1754C19.0863 13.4809 18.6244 13.0907 17.9844 13.0907C17.1282 13.0907 16.5665 13.7827 16.5665 14.9959C16.5665 16.2433 17.1363 16.9011 17.9763 16.9011C18.6001 16.9011 19.0647 16.5423 19.1754 15.9186L20.3583 15.9243Z"
                                    />
                                </svg>
                                <span><a href="{{ route('rekvizit.one',$value->id) }}">{{ $file_name}}</a></span>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript">
        //validation
        $.validator.setDefaults({
            submitHandler: function () {
            }
        });

        $(document).ready(function () {
            $("#profileForm").validate({
                rules: {
                    pr_name: {
                        required: true,
                    },
                    pr_email: {
                        required: true,
                        email: true
                    },
                    pr_city: {
                        required: true,
                    },
                    pr_password: {
                        required: true,
                    },
                    pr_ip: {
                        required: true,
                    },
                    pr_inn: {
                        required: true,
                    },
                    pr_adress: {
                        required: true,
                    },
                    pr_adress_del: {
                        required: true,
                    },
                },
                messages: {
                    email: "Введите правильный е-mail адрес",
                    pr_name: {
                        required: "Введите имя",
                    },
                    pr_city: {
                        required: "Введите город",
                    },
                    pr_email: {
                        email: "Введите правильный е-mail адрес",
                        required: "Введите е-mail адрес",
                    },
                    pr_password: {
                        required: "Введите пароль",
                    },
                    pr_ip: {
                        required: "Введите ип",
                    },
                    pr_inn: {
                        required: "Введите инн",
                    },
                    pr_adress: {
                        required: "Введите адрес",
                    },
                    pr_adress_del: {
                        required: "Введите адрес доставки",
                    },
                    register_required: "это поле требуется заполнить",
                },
                errorElement: "div",
                errorPlacement: function (error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block");

                    if (element.prop("type") === "checkbox") {
                        error.insertBefore(element.parents(".msg-err-cont"));
                    } else {
                        error.insertBefore(element.parents(".msg-err-cont"));
                    }
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass("has-error").removeClass("has-success");
                    $(element).closest(".select_mate").addClass("has-error").removeClass("has-success");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).addClass("has-success").removeClass("has-error");
                    $(element).closest(".select_mate").addClass("has-success").removeClass("has-error");
                }
            });

        });
    </script>
    <script>
        $(document).ready(function(){
            $('#doc_input_field').change(function(){
                console.log("File");
                var file_data = new FormData();
                file_data.append('file',this.files[0])
                console.log(file_data);
                $.ajax({
                    headers:{'X-CSRF-Token':$('meta[name=csrf-token]').attr('content')},
                    async:true,
                    url:"{{ route('cabinetModal') }}",
                    type:"POST",
                    processData:false,
                    contentType:false,
                    data:file_data,
                    success: function(result){
                        location.reload();
                        // setTimeout(function(){
                        //     $('#alert_message').append(`
                        //         <div class="alert alert-success">
                        //             <button type="button" class="close" data-dismiss="alert">x</button>
                        //             <strong>Файл успешно загружен.</strong>
                        //         </div>
                        //     `);
                        // },30000);
                    },
                });
            });
        });
    </script>
@endsection
