@extends('voyager::master')
@php
    $edit=(count( (array) $array)>0) ? true : false;

@endphp
@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.'Документ заказа')

@section('content')
<h1 class="page-title"><i class="voyager-window-list"></i>   {{ ($edit) ? 'Edit' : 'Add' }} Документ заказа</h1>
<div class="page-content edit-add container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-bordered">
                <!-- form start -->

                <form action="{{ ($edit) ? route('order.document.update',$array->id) : route('order.document.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="file"></label>
                                    <input type="file" name="file" id="file" value="{{ $edit ? $array->file : "" }}" class="form-control" placeholder="Файл">
                                </div>
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
