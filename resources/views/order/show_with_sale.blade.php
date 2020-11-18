@extends('voyager::master')

@section('page_title', __('скидка на заказа'))
@section('page_header')
    <div class="container-fluid">
        <a href="{{ route('order.sale.edit',$id) }}" class="btn btn-primary btn-add-new">
            <i class="voyager-edit"></i> <span>Изменить скидка</span>
        </a>
    </div>
@stop
@section('content')
    <h1 class="page-title"><i class="voyager-window-list"></i> Скидка на заказа</h1>
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">

                    <div class="order-total-price">
                        @php
                            $order__id = $id ;
                            $order = \App\Models\Orders::where('id',$order__id)->first()
                        @endphp
                        <b>Сумма заказа:</b>
                        <div class="order-total-price__container">
                            <span><b>{{ $order->billing_total}}</b></span>
                            <div class="nds"><b>в т.ч. НДС
                                    {{$order->billing_nds_total}}</b>
                            </div>
                        </div>
                        <br>
                        <b>Сумма заказа со скидкой:</b>
                        <div class="order-total-price__container">
                            <span><b>{{ $order->billing_total_sale}}</b></span>
                            <div class="nds"><b>в т.ч. НДС
                                    {{$order->billing_nds_total_sale}}</b>
                            </div>
                        </div>
                        <br>
                        <b>Скидка:</b>
                        <div class="order-total-price__container">
                            <span><b>{{ $order->billing_discount}}</b>%</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
