<?php

namespace App\DocumentTemplates;

use App\Models\OrderItems;
use App\Models\Orders;
use App\Services\HelperService;
use BWF\DocumentTemplates\DocumentTemplates\DocumentTemplate;
use BWF\DocumentTemplates\DocumentTemplates\DocumentTemplateInterface;
use Illuminate\Support\Facades\Auth;


class InvoiceTemplate implements DocumentTemplateInterface
{
    use DocumentTemplate;

    protected function getOrder(){
        $user_id = Auth::user()->id;
        $order = Orders::where('user_id','=', $user_id)->latest()->first();
        return $order;
    }
    protected function getOrderItems(){
        $order_items = OrderItems::where('order_id','=', $this->getOrder()->id)->first();
        return $order_items;
    }
    protected function getOrderItemsCount(){
        $count = $this->getOrderItems()->count();
        return  $count."(".HelperService::numberToWord($count).")";
    }
    protected function getOrderDate(){

        return date_format($this->getOrder()->created_at, 'd.m.Y');
    }
    protected function getOrderTotalWord(){

        return HelperService::numberToWord($this->getOrder()->total);
    }

    protected function dataSources()
    {
        return [
            $this->dataSource(Auth::user(), 'user'),
            $this->dataSource(new Orders(), 'order'),
            $this->dataSource(new OrderItems(), 'order_item',true,'order_items'),
            $this->dataSource($this->getOrderDate(), 'order_date'),
            $this->dataSource($this->getOrderTotalWord(), 'order_total_word'),
            $this->dataSource($this->getOrderItemsCount(), 'order_items_count'),
        ];
    }

}
