@extends('voyager::master')
@section('page_title', __('voyager::generic.viewing').' '.'Документы заказа')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-window-list"></i>  Документы заказа
        </h1>
        <a href="{{ route('order.document.create',$id) }}" class="btn btn-success btn-add-new">
            <i class="voyager-plus"></i> <span>Добавить новый</span>
        </a>
        <a href="{{ route('order.document.kp',['id'=>$id]) }}" class="btn btn-info btn-add-new">
            <i class="voyager-documentation"></i> <span>Формировать КП</span>
        </a>
        <a href="{{ route('order.document.schet',['id'=>$id]) }}" class="btn btn-danger btn-add-new">
            <i class="voyager-documentation"></i> <span>Выставить счет</span>
        </a>
        <a href="{{ route('order.document.application',['id'=>$id]) }}" class="btn btn-warning btn-add-new">
            <i class="voyager-documentation"></i> <span>Приложение</span>
        </a>
        <a href="{{ route('order.document.dogovor',$id) }}" class="btn btn-primary btn-add-new">
            <i class="voyager-documentation"></i> <span>Договор доставки</span>
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
                                    <th>Файл</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key=>$item)
                                    <tr>
                                        <td>{{ ++$key }}</td>

                                        <td>
                                            @php
                                                $array=explode('"',$item->file);
                                                $file_name=$array[7];
                                                $download_link=$array[3];
                                            @endphp
                                            <a href="{{ Storage::disk(config('voyager.storage.disk'))->url($download_link) ?: '' }}" target="_blank">
                                                {{ $file_name ?: '' }}
                                            </a>

                                        </td>

                                        <td width="350px">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                <a class="btn btn-sm btn-primary float-left" style="margin:3px;" href="{{route('order.document.show', $item->id)}}"><i class="voyager-eye"></i>Посмотреть</a>
                                                <a class="btn btn-sm btn-warning float-left " style="margin:3px;" href="{{route('order.document.edit', $item->id)}}"><i class="voyager-edit"></i>Редактировать</a>
                                                <a class="dropdown-item delete-btn btn btn-danger btn-sm" href="#" style="margin:3px;" data-url="{{route('order.document.destroy',$item->id)}}"><i class="voyager-trash"></i> @lang('Удалять')</a>
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
@include('order_document.delete-coniform')
@endsection
