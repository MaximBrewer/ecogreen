@extends('voyager::master')
@php
    $edit=(count( (array) $array)>0) ? true : false;

@endphp
@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.'Тип фасовки')

@section('content')
<h1 class="page-title"><i class="voyager-window-list"></i>   {{ ($edit) ? 'Редактировать' : 'Добавить' }} Тип фасовки продукт</h1>
<div class="page-content edit-add container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-bordered">
                <!-- form start -->

                <form action="{{ ($edit) ? route('packings.update',$array->id) : route('packings.store') }}" method="POST">
                    @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="name">Объем</label>
                                    <input type="number" name="name" value="{{ $edit ? $array->name : "" }}" class="form-control" placeholder="Volume (for.ex: 23)">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="quantity">Количество</label>
                                    <input type="number" name="quantity" value="{{ $edit ? $array->quantity : "" }}" class="form-control" placeholder="Quantity">
                                </div>
                                <input type="hidden" name="product_id" value="{{ $product_id }}">
                            </div>

                        </div><!-- panel-body -->
                    </div>

                </div>

                    <div class="panel-footer">
                        @section('submit-buttons')
                            <button type="submit" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                        @stop
                        @yield('submit-buttons')
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
