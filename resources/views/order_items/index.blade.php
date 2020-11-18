@extends('voyager::master')
@section('page_title', __('voyager::generic.viewing').' '.'Документы заказа')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-window-list"></i>  Продукты заказа
        </h1>
        <a href="{{ route('order.items.create',$id) }}" class="btn btn-success btn-add-new">
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
                                    <th>Препорат</th>
                                    <th>Упаковка, л/кг</th>
                                    <th>Количество</th>
                                    <th>Рекомендованная цена</th>
                                    <th>Скидка</th>
                                    <th>Цена со скидкой</th>
                                    <th>Сумма</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $value)
                                <tr class="{{ ($value->red_line) ? 'strike' : ''}}">
                                    <td>{{ $value->getProduct->name }}<br>
{{--                                        <span class="grey-subtext">Агрохимикаты</span></td>--}}
                                    <td>{{ $value->packing }}{{$value->getProduct->pack_type}}</td>
                                    <td>{{ $value->quantity }}</td>
                                    <td>{{ $value->price }}</td>
                                    <td>{{ ($value->discount!=0) ? $value->discount : 0 }} %</td>
                                    <td>{{ $value->sale_price }}</td>
                                    <td>{{ $value->subtotal }}<br>
                                        <span class="nds">в т.ч. НДС {{ $value->nds_price }}</span></td>
                                    <td width="350px">
                                        <div class="btn-group" role="group" aria-label="Button group">
{{--                                            <a class="btn btn-sm btn-primary float-left" style="margin:3px;" href="{{route('order.items.show', $value->id)}}"><i class="voyager-eye"></i>Посмотреть</a>--}}
                                            <a class="btn btn-sm btn-warning float-left " style="margin:3px;" href="{{route('order.items.edit', $value->id)}}"><i class="voyager-edit"></i>Редактировать</a>
                                            <a class="dropdown-item delete-btn btn btn-danger btn-sm" href="#" style="margin:3px;" data-url="{{route('order.items.destroy',['destroy_id'=>$value->id,'order_id'=>$id])}}"><i class="voyager-trash"></i> @lang('Удалять')</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
{{--                        <div class="order-total-price">--}}
{{--                            @php--}}
{{--                                $order__id = $id ?? $order_id;--}}
{{--                                $order = \App\Models\Orders::where('id',$order__id)->first()--}}
{{--                            @endphp--}}
{{--                            <b>Сумма заказа:</b>--}}
{{--                            <div class="order-total-price__container">--}}
{{--                                <span><b>{{ $order->billing_total}}</b></span>--}}
{{--                                <div class="nds"><b>в т.ч. НДС--}}
{{--                                        {{$order->billing_nds_total}}</b>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('order_items.delete-coniform')
@endsection
