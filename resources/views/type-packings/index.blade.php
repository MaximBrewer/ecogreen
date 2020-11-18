@extends('voyager::master')
@section('page_title', __('voyager::generic.viewing').' '.'Тип фасовки')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-window-list"></i>  Тип фасовки продукт</h1>
        <a href={{ route("packings.create",$id) }} class="btn btn-success btn-add-new">
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
                                    <th>Объем</th>
                                    <th>Количество</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key=>$item)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td width="350px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                <a class="btn btn-sm btn-primary float-left" style="margin:3px;" href="{{route('packings.show', $item->id)}}"><i class="voyager-eye"></i> Посмотреть</a>
                                                <a class="btn btn-sm btn-warning float-left " style="margin:3px;" href="{{route('packings.edit', $item->id)}}"><i class="voyager-edit"></i> Редактировать</a>
                                                <a class="dropdown-item delete-btn btn btn-danger btn-sm" href="#" style="margin:3px;" data-url="{{route('packings.destroy',$item->id)}}"><i class="voyager-trash"></i> @lang('Удалять')</a>
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
@include('type-packings.delete-coniform')
@endsection
