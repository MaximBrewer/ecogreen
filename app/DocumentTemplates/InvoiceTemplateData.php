<?php

namespace App\DocumentTemplates;

use App\Models\OrderItems;
use App\Models\Orders;
use App\Services\HelperService;
use BWF\DocumentTemplates\TemplateDataSources\TemplateDataSource;
use BWF\DocumentTemplates\TemplateDataSources\TemplateDataSourceFactory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


trait InvoiceTemplateData
{

    protected $foods = [
        [
            'id' => '1',
            'description' => 'Cheeseburger',
            'price' => 10
        ],
        [
            'id' => '2',
            'description' => 'Mango pudding',
            'price' => 20
        ],
        [
            'id' => '3',
            'description' => 'Mushroom gravy',
            'price' => 30
        ],
        [
            'id' => '4',
            'description' => 'Bacon sandwich',
            'price' => 40
        ],
    ];

    /**
     * @return TemplateDataSource[]
     */
    protected function getFood()
    {
        $dataSources = [];

        foreach ($this->foods as $food) {
            $dataSources[] = TemplateDataSourceFactory::build($food, 'food');
        }

        return collect($dataSources);
    }

    protected function getDates()
    {
        $dates = [
            'last' => Carbon::now()->subtract(2, 'months')->format('Y-m-d'),
            'from' => Carbon::now()->format('Y-m-d'),
            'to' => Carbon::now()->add(7, 'days')->format('Y-m-d')
        ];

        return TemplateDataSourceFactory::build( $dates, 'dates' );
    }

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
