@extends('voyager::master')
@section('page_title', __('voyager::generic.viewing').' '.'норма')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-window-list"></i>  Норма</h1>
        <a href="{{ route('norms.create',$id) }}" class="btn btn-success btn-add-new">
            <i class="voyager-plus"></i> <span>Добавить новый</span>
        </a>
    </div>
@stop
@section('content')
<div class="page-content browse container-fluid">
    @include('voyager::alerts')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>N0</th>
                                    <th>Норма</th>
                                    <th>Культуры</th>
                                    <th>Вредители</th>
                                    <th>Применение</th>
                                    <th>Ож.крат</th>
                                    <th>Мех.руч</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key=>$item)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $item->norm }}</td>
                                        <td>{{ DB::table('posts')->where('id',$item->post_id)->value('title') }}</td>
                                        <td>{{ $item->pests }}</td>
                                        <td>{{ $item->use }}</td>
                                        <td>{{ $item->oj_krat }}</td>
                                        <td>{{ $item->mex_ruch }}</td>
                                        <td width="350px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                <a class="btn btn-sm btn-primary float-left" style="margin:3px;" href="{{route('norms.show', $item->id)}}"><i class="voyager-eye"></i> Посмотреть</a>
                                                <a class="btn btn-sm btn-warning float-left " style="margin:3px;" href="{{route('norms.edit', $item->id)}}"><i class="voyager-edit"></i> Редактировать</a>
                                                <a class="dropdown-item delete-btn btn btn-danger btn-sm" href="#" style="margin:3px;" data-url="{{route('norms.destroy',$item->id)}}"><i class="voyager-trash"></i> @lang('Удалять')</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('norms.delete-coniform')
@endsection
