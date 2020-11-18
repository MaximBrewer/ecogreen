<?php

namespace App\Http\Controllers;

use App\Models\ChatRoom;
use App\Models\Messages;
use App\Models\Orders;
use App\Services\HelperService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderSaleController extends Controller
{

    public function index($id){
        return view('order.show_with_sale',compact('id'));
    }

    public function edit($id){
        $order = Orders::findOrFail($id);
        $percent = $order->billing_discount;

        return view('order.sale_apply',compact('percent','id'));
    }
    public function apply(Request $request,$id){
        $percent = $request->discount;
        $order = Orders::findOrFail($id);
        $order->billing_discount = $percent;
        $billing_total = str_replace(',','',$order->billing_total);
        $order->billing_total_sale = $billing_total - $billing_total/100*$percent;
        $order->billing_nds_total_sale = HelperService::NdsPrice($order->billing_total_sale);
        $order->save();

        return view('order.show_with_sale',compact('percent','id'));
    }

}
