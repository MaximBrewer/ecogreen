@extends('layouts.cabinet')

@section('cabinet_content')
    <div class="cabinet-container">
        <div class="cabinet__top-h">
            <div class="breadcrubms">
                <a href="/">Главная</a>
                /
                <a href="/cabinet/profile">Личный кабинет</a>
            </div>
            <h2 class="main_grey-text text-page__top-h">Реквизиты</h2>
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
                                $document=DB::table('documents')->where('id',$value->id)->first();
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
                                <span><a href="{{ route('document',$value->id) }}">{{ $file_name}}</a></span>
                            </div>
                        @endif
                    @endforeach
                    {{-- <a class="swiper-slide" href="{{asset('assets/serf2.png')}}" data-toggle="lightbox"
                       data-gallery="example-gallery">
                        <img class="img-fluid" src="{{asset('assets/serf2.png')}}" alt="certificate">
                    </a>
                    <a class="swiper-slide" href="{{asset('assets/serf3.png')}}" data-toggle="lightbox"
                       data-gallery="example-gallery">
                        <img class="img-fluid" src="{{asset('assets/serf3.png')}}" alt="certificate">
                    </a>
                    <a class="swiper-slide" href="{{asset('assets/serf1.png')}}" data-toggle="lightbox"
                       data-gallery="example-gallery">
                        <img class="img-fluid" src="{{asset('assets/serf1.png')}}" alt="certificate">
                    </a>
                    <a class="swiper-slide" href="{{asset('assets/serf2.png')}}" data-toggle="lightbox"
                       data-gallery="example-gallery">
                        <img class="img-fluid" src="{{asset('assets/serf2.png')}}" alt="certificate">
                    </a>
                    <a class="swiper-slide" href="{{asset('assets/serf3.png')}}" data-toggle="lightbox"
                       data-gallery="example-gallery">
                        <img class="img-fluid" src="{{asset('assets/serf3.png')}}" alt="certificate">
                    </a> --}}
                </div>

                <div class="profile-docs__add-button">
                    <a href="javascript:;">
                        <div class="order-documents__item">
                            <a href="#" data-toggle="modal" data-target="#docsAddModal">
                                <svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18 1C19.1046 1 20 1.89543 20 3V24C20 25.1046 19.1046 26 18 26H2C0.89543 26 0 25.1046 0 24V3C0 1.89543 0.89543 1 2 1H18ZM18 2H2C1.48716 2 1.06449 2.38604 1.00673 2.88338L1 3V24C1 24.5128 1.38604 24.9355 1.88338 24.9933L2 25H18C18.5128 25 18.9355 24.614 18.9933 24.1166L19 24V3C19 2.48716 18.614 2.06449 18.1166 2.00673L18 2ZM6 29C4.89543 29 4 28.1046 4 27H5C5 27.5128 5.38604 27.9355 5.88338 27.9933L6 28H22C22.5128 28 22.9355 27.614 22.9933 27.1166L23 27V6C23 5.48716 22.614 5.06449 22.1166 5.00673L22 5H21V4H22C23.1046 4 24 4.89543 24 6V27C24 28.1046 23.1046 29 22 29H6ZM9.58333 8.91893V12.3542H5.91893C5.41778 12.3542 5 12.7646 5 13.2708C5 13.7806 5.41142 14.1875 5.91893 14.1875H9.58333V18.0811C9.58333 18.5822 9.99374 19 10.5 19C11.0098 19 11.4167 18.5886 11.4167 18.0811V14.1875H15.0811C15.5822 14.1875 16 13.7771 16 13.2708C16 12.761 15.5886 12.3542 15.0811 12.3542H11.4167V8.91893C11.4167 8.41778 11.0063 8 10.5 8C9.99021 8 9.58333 8.41142 9.58333 8.91893Z"></path>
                                </svg>
                                Добавить документ
                            </a>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

    @include('modals.docs-add-modal')

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
    <script type="text/javascript">
        $(document).ready(function(){

            // $('#doc_input_field').change(function() {
            //     alert(111);
            // });

            $('.docs-add__select-pc').click(function() {
                $('#doc_input_field').click();
            });

            $('#doc_input_field').change(function() {
                $('#formModal').submit();
            });

            // $('#doc_input_field').change(function(){
                // console.log("File");
                // var file_data = new FormData();
                // file_data.append('file',this.files[0])
                // console.log(file_data);
                var bar = $('#progress_bar');
                var percent = $('#percantage_bar');
                $('#formModal').ajaxForm({
                    beforeSend: function() {
                        var percentVal = '0%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                    },
                    uploadProgress: function(event, position, total, percentComplete) {
                        var percentVal = percentComplete + '%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                        if(percentComplete==100){
                            $('#path_uploaded_progressbar').attr('d','M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10ZM4.16667 10.9458L7.72727 14.7222L15.8333 6.12489L14.7727 5L7.72727 12.4725L5.22727 9.82094L4.16667 10.9458Z" fill="#F2994A"');
                        }
                    },
                    success: function(xhr) {
                        $('#docsAddModal').modal('hide');
                        window.location.href = "{{ route('documents') }}";
                    }
                });
                // function getRequest(){
                //     $.ajax({
                //         headers:{'X-CSRF-Token':$('meta[name=csrf-token]').attr('content')},
                //         async:true,
                //         url:"",
                //         type:"POST",
                //         processData:false,
                //         contentType:false,
                //         data:file_data,
                //         success: function(result){
                //             location.reload();
                //             // setTimeout(function(){
                //             //     $('#alert_message').append(`
                //             //         <div class="alert alert-success">
                //             //             <button type="button" class="close" data-dismiss="alert">x</button>
                //             //             <strong>Файл успешно загружен.</strong>
                //             //         </div>
                //             //     `);
                //             // },30000);
                //         },
                //     });
                // }

            //   });

        });



        {{--var file_input = document.getElementById('docs-add__input');--}}
        {{--file_input.addEventListener("change", function(){--}}
        {{--$(function(){--}}
        {{--    var upload_url = '{{ route("cabinetModal") }}';--}}
        {{--    var swf_asset_url = '{{ asset("assets/js/swfupload/swfupload.js") }}';--}}
        {{--    var swf = document.getElementById('swfupload-control');--}}
        {{--    $(swf).swfupload({--}}
        {{--        upload_url: upload_url,--}}
        {{--        file_post_name: 'file',--}}
        {{--        file_size_limit : "1024000",--}}
        {{--        file_types : "*.*",--}}
        {{--        file_types_description : "files",--}}
        {{--        file_upload_limit : 10,--}}
        {{--        flash_url : swf_asset_url,--}}
        {{--        // button_image_url : 'js/swfupload/wdp_buttons_upload_114x29.png',--}}
        {{--        // button_width : 114,--}}
        {{--        // button_height : 29,--}}
        {{--        button_placeholder : $('#button_docs_add')[0],--}}
        {{--        debug: false--}}
        {{--    })--}}
        {{--        .bind('fileQueued', function(event, file){--}}
        {{--            // '<li id="'+file.id+'" >'+--}}
        {{--            //     'File: <em>'+file.name+'</em> ('+Math.round(file.size/1024)+' KB) <span class="progressvalue" ></span>'+--}}
        {{--            //     '<div class="progressbar" ><div class="progress" ></div></div>'+--}}
        {{--            //     '<p class="status" >Pending</p>'+--}}
        {{--            //     '<span class="cancel" >&nbsp;</span>'+--}}
        {{--            //     '</li>';--}}
        {{--            var file_id = file.id;--}}
        {{--            var listitem = `--}}
        {{--                    <div class="docs-add__progress__item" id="${file_id}">--}}
        {{--                        <div class="docs-add__progress__file-image">--}}
        {{--                            <svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
        {{--                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0596 0L24 3.83097V5.83333V27.5C24 28.8807 22.8487 30 21.4286 30H2.57143C1.15127 30 0 28.8807 0 27.5V2.5C0 1.11929 1.15127 0 2.57143 0H18H20.0596ZM18 1.16667H2.57143C1.85609 1.16667 1.26867 1.69913 1.2056 2.37864L1.2 2.5V27.5C1.2 28.1955 1.74768 28.7666 2.4466 28.8279L2.57143 28.8333H21.4286C22.1439 28.8333 22.7313 28.3009 22.7944 27.6214L22.8 27.5V5.83333H18V1.16667ZM22.8 4.66667L22.8 4.31417L19.5626 1.16667H19.2V4.66667H22.8ZM19.4972 16.2358C19.4943 17.3011 18.6591 17.9801 17.2386 17.9801C15.8267 17.9801 14.9261 17.3295 14.8949 16.071H16.0852C16.125 16.6534 16.5852 16.9489 17.2244 16.9489C17.8494 16.9489 18.2528 16.6591 18.2557 16.233C18.2528 15.8409 17.9006 15.6591 17.267 15.5057L16.6335 15.3466C15.6506 15.1108 15.0455 14.6193 15.0483 13.7614C15.0426 12.7045 15.9773 12 17.2528 12C18.5483 12 19.4006 12.7159 19.4176 13.7528H18.2386C18.1932 13.2955 17.8324 13.0284 17.2443 13.0284C16.642 13.0284 16.3097 13.304 16.3097 13.679C16.3011 14.0966 16.7244 14.2841 17.2301 14.4006L17.7528 14.5256C18.7642 14.7528 19.4943 15.267 19.4972 16.2358ZM8.93181 16.8835V17.8977H5V12.0795H8.92045V13.0937H6.23011V14.4801H8.71875V15.4943H6.23011V16.8835H8.93181ZM11.1307 16.0114V17.8977H9.90057V12.0795H12.196C13.517 12.0795 14.2812 12.8949 14.2812 14.0511C14.2812 15.2131 13.5028 16.0114 12.1648 16.0114H11.1307ZM11.9659 15.0256H11.1307V13.0852H11.9602C12.6705 13.0852 13.0142 13.4716 13.0142 14.0511C13.0142 14.6278 12.6705 15.0256 11.9659 15.0256Z" fill="white"/>--}}
        {{--                            </svg>--}}
        {{--                        </div>--}}
        {{--                        <div class="docs-add__progress__file-status">--}}
        {{--                            <div class="docs-add__progress__file-info">--}}
        {{--                                <div>${file.name}</div>--}}
        {{--                                <div id="percantage_bar">0%</div>--}}
        {{--                            </div>--}}
        {{--                            <div class="docs-add__progress__file-line">--}}
        {{--                                <div class="line">--}}
        {{--                                    <div class="background"></div>--}}
        {{--                                    <div id="progress_bar" class="status" style=""></div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="docs-add__progress__file-controls">--}}
        {{--                            <span class="cancel">--}}
        {{--                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
        {{--                                    <path id="path_uploaded_progressbar" fill-rule="evenodd" clip-rule="evenodd" d="M0 10C0 15.5 4.5 20 10 20C15.5 20 20 15.5 20 10C20 4.5 15.5 0 10 0C4.5 0 0 4.5 0 10ZM1.25 10C1.25 5.1875 5.1875 1.25 10 1.25C14.8125 1.25 18.75 5.1875 18.75 10C18.75 14.8125 14.8125 18.75 10 18.75C5.1875 18.75 1.25 14.8125 1.25 10ZM11.1299 10.0108L14.1667 13.0476L13.0367 14.1775L10 11.1408L6.96328 14.1775L5.83334 13.0476L8.87006 10.0108L5.83334 6.97411L6.96328 5.84416L10 8.88089L13.0367 5.84416L14.1667 6.97411L11.1299 10.0108Z" fill="#F2F2F2"/>--}}
        {{--                                </svg>--}}
        {{--                            </span>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                `;--}}
        {{--            $('.docs-add__progress').append(listitem);--}}
        {{--            $('div#'+file.id+' .cancel').bind('click', function(){ //Remove from queue on cancel click--}}
        {{--                var swfu = $.swfupload.getInstance('.docs-add__progress');--}}
        {{--                $(swfu).cancelUpload(file.id);--}}
        {{--                $('div#'+file.id).slideUp('fast');--}}
        {{--            });--}}
        {{--            // start the upload since it's queued--}}
        {{--            $(this).swfupload('startUpload');--}}
        {{--        })--}}
        {{--        .bind('fileQueueError', function(event, file, errorCode, message){--}}
        {{--            alert('Size of the file '+file.name+' is greater than limit');--}}
        {{--        })--}}
        {{--        // .bind('fileDialogComplete', function(event, numFilesSelected, numFilesQueued){--}}
        {{--        //     $('#queuestatus').text('Files Selected: '+numFilesSelected+' / Queued Files: '+numFilesQueued);--}}
        {{--        // })--}}
        {{--        // .bind('uploadStart', function(event, file){--}}
        {{--        //     $('#log li#'+file.id).find('p.status').text('Uploading...');--}}
        {{--        //     $('#log li#'+file.id).find('span.progressvalue').text('0%');--}}
        {{--        //     $('#log li#'+file.id).find('span.cancel').hide();--}}
        {{--        //--}}
        {{--        // })--}}
        {{--        .bind('uploadProgress', function(event, file, bytesLoaded){--}}
        {{--            //Show Progress--}}
        {{--            // var percentage=Math.round((bytesLoaded/file.size)*100);--}}
        {{--            var file_size = Math.round(file.size/1024); //KB--}}
        {{--            var kbytes_loaded =Math.round(bytesLoaded/1024); //KB--}}
        {{--            var item = $('#div'+file.id).find('div.docs-add__progress__file-status');--}}
        {{--            $(item).find('#progress_bar').css('width', percentage+'%');--}}
        {{--            $(item).find('#percantage_bar').text(kbytes_loaded +'of'+ file_size +'KB');--}}
        {{--        })--}}
        {{--        .bind('uploadSuccess', function(event, file, serverData){--}}
        {{--            var item=$('#div'+file.id);--}}
        {{--            $(item).find('#progress_bar').css('width', '100%');--}}
        {{--            $(item).find('#percantage_bar').text('100%');--}}
        {{--            $(item).find('#percantage_bar').addClass('status-done');--}}
        {{--            $('#path_uploaded_progressbar').attr('d','M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10ZM4.16667 10.9458L7.72727 14.7222L15.8333 6.12489L14.7727 5L7.72727 12.4725L5.22727 9.82094L4.16667 10.9458Z" fill="#F2994A"');--}}

        {{--            // var pathtofile='<a href="uploads/'+file.name+'" target="_blank" >view &raquo;</a>';--}}
        {{--            // item.addClass('success').find('p.status').html('Done!!! | '+pathtofile);--}}
        {{--        })--}}
        {{--        .bind('uploadComplete', function(event, file){--}}
        {{--            // upload has completed, try the next one in the queue--}}
        {{--            $(this).swfupload('startUpload');--}}
        {{--        })--}}
        {{--});--}}

        // jQuery.fn.bindAll = function(options) {
        //     var $this = this;
        //     jQuery.each(options, function(key, val){
        //         $this.bind(key, val);
        //     });
        //     return this;
        // }
        //
        // $(function(){
        //
        //     var listeners = {
        //         swfuploadLoaded: function(event){
        //             $('.log', this).append('<li>Loaded</li>');
        //         },
        //         fileQueued: function(event, file){
        //             $('.log', this).append('<li>File queued - '+file.name+'</li>');
        //             // start the upload once it is queued
        //             // but only if this queue is not disabled
        //             if (!$('input[name=disabled]:checked', this).length) {
        //                 $(this).swfupload('startUpload');
        //             }
        //         },
        //         fileQueueError: function(event, file, errorCode, message){
        //             $('.log', this).append('<li>File queue error - '+message+'</li>');
        //         },
        //         fileDialogStart: function(event){
        //             $('.log', this).append('<li>File dialog start</li>');
        //         },
        //         fileDialogComplete: function(event, numFilesSelected, numFilesQueued){
        //             $('.log', this).append('<li>File dialog complete</li>');
        //         },
        //         uploadStart: function(event, file){
        //             $('.log', this).append('<li>Upload start - '+file.name+'</li>');
        //             // don't start the upload if this queue is disabled
        //             if ($('input[name=disabled]:checked', this).length) {
        //                 event.preventDefault();
        //             }
        //         },
        //         uploadProgress: function(event, file, bytesLoaded){
        //             $('.log', this).append('<li>Upload progress - '+bytesLoaded+'</li>');
        //         },
        //         uploadSuccess: function(event, file, serverData){
        //             $('.log', this).append('<li>Upload success - '+file.name+'</li>');
        //         },
        //         uploadComplete: function(event, file){
        //             $('.log', this).append('<li>Upload complete - '+file.name+'</li>');
        //             // upload has completed, lets try the next one in the queue
        //             // but only if this queue is not disabled
        //             if (!$('input[name=disabled]:checked', this).length) {
        //                 $(this).swfupload('startUpload');
        //             }
        //         },
        //         uploadError: function(event, file, errorCode, message){
        //             $('.log', this).append('<li>Upload error - '+message+'</li>');
        //         }
        //     };
        //
        //     $('.swfupload-control').bindAll(listeners);
        //
        //
        //     // start the queue if the queue is already disabled
        //     $('.swfupload-control input[name=disabled]').click(function(){
        //         if (!this.checked) {
        //             $(this).parents('.swfupload-control').swfupload('startUpload');
        //         }
        //     });
        //
        // });
        //
        // $(function(){
        //     $('.swfupload-control').each(function(){
        //         $(this).swfupload({
        //             upload_url: "upload.php",
        //             file_size_limit : "10240",
        //             file_types : "*.*",
        //             file_types_description : "All Files",
        //             file_upload_limit : "0",
        //             flash_url : "../vendor/swfupload/swfupload.swf",
        //             button_image_url : '../vendor/swfupload/XPButtonUploadText_61x22.png',
        //             button_width : 61,
        //             button_height : 22,
        //             button_placeholder : $('.button', this)[0],
        //             debug: true
        //         });
        //     });
        // });
    </script>
@endsection
