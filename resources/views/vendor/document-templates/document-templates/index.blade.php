@extends('vendor.document-templates.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>@lang('Название')</th>
                        <th>@lang('Класс документа')</th>
                        <th>@lang('Шаблон')</th>
                        <th>@lang('Создан в')</th>
                        <th>@lang('Изменено в')</th>
                        <th>@lang('Действия')</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($documentTemplates as $documentTempate)
                            <tr>
                                <td><a href="{{route(config('document_templates.base_url') . '.edit', $documentTempate->id)}}">{{$documentTempate->name}}</a></td>
                                <td>{{$documentTempate->document_class}}</td>
                                <td>{{$documentTempate->layout}}</td>
                                <td>{{$documentTempate->created_at}}</td>
                                <td>{{$documentTempate->updated_at}}</td>
                                <td>
                                    <a class="btn btn btn-primary" target="_blank" href="{{route(config('document_templates.base_url') . '.show', $documentTempate->id)}}">Визуализировать</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
