@extends('layouts.cabinet')

@section('cabinet_content')
    <div class="cabinet__top-h">
        <div class="breadcrubms">
            <a href="/">Главная</a>
            /
            <a href="/cabinet/profile">Личный кабинет</a>
        </div>
        <h2 class="main_grey-text text-page__top-h">Заказы</h2>
    </div>
    <div class="cabinet-orders">
        <table class="cabinet-orders__table table_sort">
            <thead>
            <tr>
                <th>Номер</th>
                <th>ФИО</th>
                <th>Дата</th>
                <th>Сумма заказа</th>
                <th>Скидка</th>
                <th>Сумма заказа со скидкой</th>
                <th>Вид оплаты</th>
                <th>Вид доставки</th>
                <th>Состояние</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($items as $i=>$item)
                    <tr onclick="window.location.href='{{ route('order',$item->id) }}'; return false">
                        <a href="{{ route('order',$item->id) }}">
                            <td>{{ $item->order_nr}}</td>
                            <td>{{ $item->getUser->name }}</td>
                            <td>{{ $item->created_at->format('d/m/Y')}}</td>
                            <td>{{ $item->billing_total }} ₽</td>
                            <td>{{ ($item->billing_discount!=0) ? $item->billing_discount : 0 }} %</td>
                            <td>{{ ($item->billing_discount!=0) ? $item->billing_total_sale : $item->billing_total }}<br>
                                <span class="nds">в т.ч. НДС {{ ($item->billing_discount!=0) ? $item->billing_nds_total_sale : $item->billing_nds_total }}</span></td>
                            <td>{{ \DB::table('order_payment_types')->where('id',$item->payment_type_id)->value('payment_type') }}</td>
                            <td>{{ \DB::table('order_shipping_types')->where('id',$item->shipping_type_id)->value('shipping_type') }}</td>
                            <td>{{ \DB::table('order_status')->where('id',$item->status_id)->value('status') }}</td>
                        </a>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const getSort = ({target}) => {
                const order = (target.dataset.order = -(target.dataset.order || -1));
                const index = [...target.parentNode.cells].indexOf(target);
                const collator = new Intl.Collator(['en', 'ru'], {numeric: true});
                const comparator = (index, order) => (a, b) => order * collator.compare(
                    a.children[index].innerHTML,
                    b.children[index].innerHTML
                );

                for (const tBody of target.closest('table').tBodies)
                    tBody.append(...[...tBody.rows].sort(comparator(index, order)));

                for (const cell of target.parentNode.cells)
                    cell.classList.toggle('sorted', cell === target);
            };

            document.querySelectorAll('.table_sort thead').forEach(tableTH => tableTH.addEventListener('click', () => getSort(event)));

        });
    </script>
@endsection
