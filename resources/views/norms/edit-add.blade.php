@extends('voyager::master')
@php
    $edit=(count( (array) $array)>0) ? true : false;

@endphp
@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.'норма')

@section('content')
<h1 class="page-title"><i class="voyager-window-list"></i>   {{ ($edit) ? 'Редактировать' : 'Добавить' }} Норма</h1>
<div class="page-content edit-add container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-bordered">
                <!-- form start -->

                <form action="{{ ($edit) ? route('norms.update',$array->id) : route('norms.store') }}" method="POST">
                    @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="norm">Норма</label>
                                    <input type="text" name="norm" id="norm" value="{{ $edit ? $array->norm : "" }}" class="form-control" placeholder="Норма">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="culture">Культуры</label>
                                    <select class="form-control" name="post_id" id="culture" >
                                        <option value="0">Никакой</option>
                                        @foreach ($posts as $post)
                                        <option value="{{ $post->id }}" {{ $edit ? ((json_decode($array->post_id) == $post->id) ? 'selected' : ''):'' }}>{{ $post->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="pests">Вредители</label>
                                    <input type="text" name="pests" id="pests" value="{{ $edit ? $array->pests : "" }}" class="form-control" placeholder="Вредители">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="use">Применение</label>
                                    <input type="text" name="use" id="use" value="{{ $edit ? $array->use : "" }}" class="form-control" placeholder="Применение">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="oj_krat">Ож.крат</label>
                                    <input type="text" name="oj_krat" id="oj_krat" value="{{ $edit ? $array->oj_krat : "" }}" class="form-control" placeholder="Ож.крат">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="mex_ruch">Мех.руч</label>
                                    <input type="text" name="mex_ruch" id="mex_ruch" value="{{ $edit ? $array->mex_ruch : "" }}" class="form-control" placeholder="Мех.руч">
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
