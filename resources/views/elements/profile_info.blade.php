<div class="profile__info"  >
    <div class="profile__info-wrapper">
{{--        <div class="profile__info-avatar rounded-circle align-center w-100 img-thumbnail" style="background-image: url({{ asset('storage/'.$getItem->avatar) }}); "></div>--}}
        <img class="profile__info-avatar " src="{{ asset('storage/'.$getItem->avatar) }}" >
    </div>
{{--    <div class="form-group pretty-file-selector" >--}}
        <div class="profile__info-avatar__actions">
            <a class="profile__info-avatar__actions__edit"
                     data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-pen"></i> Редактировать
            </a>
            <a href="{{route('image_delete')}}" type="button" class=" {{ ($getItem->avatar=="users/default.png") ? 'disabled' : '' }} profile__info-avatar__actions__delete">
                <i class="fas fa-trash"></i> Удалять
            </a>
        </div>
{{--    </div>--}}
    <div id="accordionExample" class="profile-accordion">
        <div class="profile-accordion__item" id="headingOne">
            <div class="profile-accordion__heading-item">
                <a data-toggle="collapse" class="profile-accordion__heading-item-link"
                   data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Информация
                </a>
            </div>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
             data-parent="#accordionExample">
            <div class="profile-accordion__text-item">
                <ul>
                    <li>Имя: <span class="fw-600">{{ $getItem->name }}</span></li>
                    <li>Почта: <span class="fw-600">{{ $getItem->email }}</span></li>
                    @php
                    $array=[
                            'Москва','Новосибирск','Екатеринбург','Омск','Челябинск'
                        ];
                    @endphp
                    <li>Город: <span class="fw-600">{{ ($array[$getItem->city]) ?? "Пустой"  }}</span></li>
                    <li>Организация: <span class="fw-600">{{ ($getItem->name_organization) ?? "Пустой"}}</span></li>
                </ul>
            </div>
        </div>
        <div id="headingTwo">
            <div class="profile-accordion__heading-item">
                <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                   aria-controls="collapseTwo">
                    Адрес
                </a>
            </div>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="profile-accordion__text-item">
                {{ $getItem->billing_address }}
            </div>
        </div>

        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
             data-parent="#accordionExample">
            <div class="profile-accordion__text-item">

            </div>
        </div>

        <div id="headingFive">
            <div class="profile-accordion__heading-item">
                <a  href="{{ route('documents') }}" {{--data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                   aria-controls="collapseFive"--}}>
                    Реквизиты
                </a>
            </div>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
             data-parent="#accordionExample">
            <div class="profile-accordion__text-item">
                {{-- <ul>
                    @foreach($contents as $item)
                        @php
                            $array=explode('"',$item->file);
                            $file_name=$array[7];
                        @endphp
                        <li>{{ $file_name }}</li>
                    @endforeach
                </ul> --}}
            </div>
        </div>

        <div id="headingSix">
            <div class="profile-accordion__heading-item">
                <a href="{{ route('settings') }}"{{-- data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                   aria-controls="collapseSix"--}}>
                    Рассылка
                </a>
            </div>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            <div class="profile-accordion__text-item">

            </div>
        </div>
    </div>
</div>
