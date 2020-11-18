@extends('voyager::master')
@php
    $edit=(count( (array) $array)>0) ? true : false;

@endphp
@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.'Продукт заказа')

@section('content')
    <h1 class="page-title"><i class="voyager-window-list"></i>   {{ ($edit) ? 'Редактировать' : 'Добавить' }} Продукт заказа</h1>
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->

                    <form action="{{ ($edit) ? route('order.items.update',$array->id) : route('order.items.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel-body">
                                    <div class="row">
{{--                                        <div class="form-group col-md-12">--}}
{{--                                            <label for="product_id">Продукт</label>--}}
{{--                                            <select class="form-control" name="product_id" id="product_id" >--}}
{{--                                                <option value="0">Никакой</option>--}}
{{--                                                @foreach ($products as $key=>$product)--}}
{{--                                                <option value="{{ $key }}" {{ ($array->product_id == $key) ? 'selected' : '' }}>{{ $product->name }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group col-md-12">--}}
{{--                                            <label class="control-label" for="packing">Упаковка</label>--}}
{{--                                            <input type="number" name="packing" id="packing" value="{{ $edit ? $array->packing : "" }}" class="form-control" placeholder="Упаковка">--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group col-md-12">--}}
{{--                                            <label class="control-label" for="quantity">Количество</label>--}}
{{--                                            <input type="number" name="quantity" id="quantity" value="{{ $edit ? $array->quantity : "" }}" class="form-control" placeholder="Количество">--}}
{{--                                        </div>--}}
                                        @if($edit)
                                        <div class="form-group col-md-12">
                                            <input type="checkbox" name="red_line" class="form-check-input" id="exampleCheck1" {{ ($edit) ? (($array->red_line) ? "checked" : "") : ""}}>
                                            <label class="form-check-label" for="exampleCheck1">Зачеркивание товара</label>
                                        </div>
                                        @endif
                                        <input type="hidden" name="order_id" value="{{ $order_id }}">
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
