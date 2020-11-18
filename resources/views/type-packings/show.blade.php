@extends('voyager::master')

@section('page_title', __('voyager::generic.view'))

@section('content')
<h1 class="page-title">Посмотреть Тип фасовки продукт</h1>
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
                                    <label class="control-label" ><h4><b>Объем</b></h4></label><br>
                                    <span>{{ $item->name }}</span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" ><h4><b>Количество</b></h4></label><br>
                                    <span>{{ $item->quantity }}</span>
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
