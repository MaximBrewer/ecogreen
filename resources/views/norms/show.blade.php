@extends('voyager::master')

@section('page_title', __('voyager::generic.view'))

@section('content')
<h1 class="page-title">Посмотреть Норма</h1>
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
                                    <label class="control-label" ><h4><b>Норма</b></h4></label><br>
                                    <span>{{ $item->norm }}</span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" ><h4><b>Культуры</b></h4></label><br>
                                    <span>{{ DB::table('posts')->where('id',$item->post_id)->value('title') }}</span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" ><h4><b>Вредители</b></h4></label><br>
                                    <span>{{ $item->pests }}</span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" ><h4><b>Применение</b></h4></label><br>
                                    <span>{{ $item->use }}</span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" ><h4><b>Ож.крат</b></h4></label><br>
                                    <span>{{ $item->oj_krat }}</span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" ><h4><b>Мех.руч</b></h4></label><br>
                                    <span>{{ $item->mex_ruch }}</span>
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
