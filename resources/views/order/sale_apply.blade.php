@extends('voyager::master')
@php
    $edit= isset($percent);

@endphp
@section('page_title', __('Установить скидка на заказа'))

@section('content')
    <h1 class="page-title"><i class="voyager-window-list"></i> Установить скидка на заказа</h1>
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->

                    <form action="{{ route('order.sale.apply',$id) }}" method="POST" >
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label class="control-label" for="discount">Процент скидка</label>
                                            <input type="number" name="discount" class="form-control" id="discount" {{ ($edit) ? $percent : ""}}>
                                        </div>
                                        <input type="hidden" name="order_id" value="{{ $id }}">
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
