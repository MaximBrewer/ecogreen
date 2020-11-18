@extends('voyager::master')

@section('page_title', __('voyager::generic.view'))

@section('content')
<h1 class="page-title">Документ заказа</h1>
<div class="page-content edit-add container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-bordered">
                <!-- form start -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label" ><h4><b>Файл</b></h4></label><br>
                                    <span>
                                       @php
                                           $array=explode('"',$item->file);
                                           $file_name=$array[7];
                                           $download_link=$array[3];
                                       @endphp
                                            <a href="{{ Storage::disk(config('voyager.storage.disk'))->url($download_link) ?: '' }}" target="_blank">
                                                {{ $file_name ?: '' }}
                                            </a>
                                    </span>
                                </div>
                            </div>
                        </div><!-- panel-body -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
