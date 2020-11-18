@extends('layouts.cabinet')

@section('cabinet_content')
    <div class="cabinet-container">
        <div class="cabinet__top-h">
            <div class="breadcrubms">
                <a href="/">Главная</a>
                /
                <a href="/cabinet/profile">Личный кабинет</a>
            </div>
            <h2 class="main_grey-text text-page__top-h">Настройки личного кабинета</h2>
        </div>
    </div>
    <div class="cabinet-container">
        <div class="profile">
        @include('elements.profile_info')

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css" integrity="sha512-uyGg6dZr3cE1PxtKOCGqKGTiZybe5iSq3LsqOolABqAWlIRLo/HKyrMMD8drX+gls3twJdpYX0gDKEdtf2dpmw==" crossorigin="anonymous" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js" integrity="sha512-lC8vSUSlXWqh7A/F+EUS3l77bdlj+rGMN4NB5XFAHnTR3jQtg4ibZccWpuSSIdPoPUlUxtnGktLyrWcDhG8RvA==" crossorigin="anonymous"></script>
            @isset($settings)
                <form>
                    <div class="profile-settings">
                        <div class="profile-settings__block">
                            <div class="profile-settings__block-title">Уведомления</div>
                            <div class="profile-settings__block-item">
                                <input type="checkbox" class="js-switch" data-id="nt_1" {{($settings->nt_1)?'checked':''}} />
                                <span>Сообщения</span>
                            </div>
                            <div class="profile-settings__block-item">
                                <input type="checkbox" class="js-switch" data-id="nt_2" {{($settings->nt_2)?'checked':''}} />
                                <span>Новый заказ</span>
                            </div>
                            <div class="profile-settings__block-item">
                                <input type="checkbox" class="js-switch" data-id="nt_3" {{($settings->nt_3)?'checked':''}} />
                                <span>Смена статуса заказа</span>
                            </div>
                            <div class="profile-settings__block-item">
                                <input type="checkbox" class="js-switch" data-id="nt_4" {{($settings->nt_4)?'checked':''}} />
                                <span>Ответ менеджера по переписке</span>
                            </div>
                        </div>

                        <div class="profile-settings__block">
                            <div class="profile-settings__block-title">Рассылка</div>
                            @if(setting('site.ml_1'))
                            <div class="profile-settings__block-item">
                                <input type="checkbox" class="js-switch" data-id="ml_1" {{($settings->ml_1)?'checked':''}} />
                                <span>Новые поступления</span>
                            </div>
                            @endif
                            @if(setting('site.ml_2'))
                            <div class="profile-settings__block-item">
                                <input type="checkbox" class="js-switch" data-id="ml_2" {{($settings->ml_2)?'checked':''}} />
                                <span>Новый заказ</span>
                            </div>
                            @endif
                            @if(setting('site.ml_3'))
                            <div class="profile-settings__block-item">
                                <input type="checkbox" class="js-switch" data-id="ml_3" {{($settings->ml_3)?'checked':''}} />
                                <span>Смена статуса заказа</span>
                            </div>
                            @endif
                            @if(setting('site.ml_4'))
                            <div class="profile-settings__block-item">
                                <input type="checkbox" class="js-switch" data-id="ml_4"  {{($settings->ml_4)?'checked':''}} />
                                <span>Ответ менеджера по переписке</span>
                            </div>
                            @endif
                        </div>
                    </div>
                </form>
            @else
                <div class="profile-settings">
                    <div class="profile-settings__block">
                        <div class="profile-settings__block-title">Уведомления</div>
                        <div class="profile-settings__block-item">
                            <input type="checkbox" class="js-switch" checked />
                            <span>Сообщения</span>
                        </div>
                        <div class="profile-settings__block-item">
                            <input type="checkbox" class="js-switch" checked />
                            <span>Новый заказ</span>
                        </div>
                        <div class="profile-settings__block-item">
                            <input type="checkbox" class="js-switch" checked />
                            <span>Смена статуса заказа</span>
                        </div>
                        <div class="profile-settings__block-item">
                            <input type="checkbox" class="js-switch" checked />
                            <span>Ответ менеджера по переписке</span>
                        </div>
                    </div>

                    <div class="profile-settings__block">
                        <div class="profile-settings__block-title">Рассылка</div>
                        @if(setting('site.ml_1'))
                            <div class="profile-settings__block-item">
                                <input type="checkbox" class="js-switch" checked/>
                                <span>Новые поступления</span>
                            </div>
                        @endif
                        @if(setting('site.ml_2'))
                            <div class="profile-settings__block-item">
                                <input type="checkbox" class="js-switch" checked/>
                                <span>Новый заказ</span>
                            </div>
                        @endif
                        @if(setting('site.ml_3'))
                            <div class="profile-settings__block-item">
                                <input type="checkbox" class="js-switch" checked/>
                                <span>Смена статуса заказа</span>
                            </div>
                        @endif
                        @if(setting('site.ml_4'))
                            <div class="profile-settings__block-item">
                                <input type="checkbox" class="js-switch" checked/>
                                <span>Ответ менеджера по переписке</span>
                            </div>
                        @endif
                    </div>
                </div>
            @endisset
            <script>
                var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

                elems.forEach(function(html) {
                    var switchery = new Switchery(html, { size: 'small' });
                });

            </script>
        </div>
    </div>
    <script type="text/javascript">
        //validation
        $.validator.setDefaults({
            submitHandler: function () {
            }
        });
        var setting_url = '{{route('setting.update')}}';
        var message = '';
        var spinner=$('#loader');
        // Change event checkboxes
        $(document).ready(function() {
            $("input[type='checkbox']").change(function () {
                spinner.show();
                var id = $(this).data('id');
                var value = $(this).prop('checked');
                if(value){
                    value = 1;
                }else{
                    value = 0;
                }
                $.ajax({
                    url:setting_url,
                    type: 'PATCH',
                    data:{value:value, id:id},
                    dataType:'JSON',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response){
                        spinner.hide();
                        message = response.message;
                        console.log(message);
                        toastr.success(message);
                    },
                    error: function(response){
                        spinner.hide();
                        message = response;
                        console.log(message);
                    }
                });
            });
        });

    </script>
@endsection
