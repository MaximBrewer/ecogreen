<?php

namespace App\Http\Controllers;

use App\Models\OrderItems;
use App\Models\Orders;
use App\Models\Product;
use App\Services\HelperService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data=OrderItems::where('order_id',$id)->get();

        return view('order_items.index',compact('data','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($order_id)
    {
        $array=[];
        $products = Product::all();
        $product = $products[0];
        return view('order_items.edit-add',compact('order_id','array','products', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//        $order_id = $request->order_id;
//        $user_id = DB::table('orders')->where('id',$order_id)->value('user_id');
//        $product = Product::findOrFail($request->product_id);
//
//        if(OrderItems::where('product_id',$product->id)->first()){
//            return redirect()->route('order.items.index',compact('order_id'))->with(
//                [
//                    'message'=>__('Товар уже в корзине!'),
//                    'alert-type'=>'success'
//                ]
//            );
//        }
//
//
//        // rounded value of packing
//        $packing = HelperService::packingRound($request->packing) ?? 5;
//        // nds_price of item
//        $nds = HelperService::NdsPrice($product->price * $packing);
//        $nds_percentage = HelperService::$NDS_PERCENTAGE;
//
//        // condition for VAT(NDS)
//        $vatCondition = new \Darryldecode\Cart\CartCondition(array(
//            'name' => 'VAT',
//            'type' => 'tax',
//            'target' => 'subtotal',
//            'value' => $nds_percentage.'%',
//            'order'=> 2
//        ));
//        $discount = $product->discount;
//
//        if($discount != null || $discount > 0){
//            // condition for discount
//            $saleCondition = new \Darryldecode\Cart\CartCondition(array(
//                'name' => 'SALE '.$discount.'%',
//                'type' => 'sale',
//                'target' => 'subtotal',
//                'value' => '-'.$discount.'%',
//                'order'=>1
//            ));
//            // now the product to be added on cart
//            $item = array(
//                'id' => $product->id,
//                'name' => $product->name,
//                'price' => $product->price * $packing,
//                'quantity' => 1,
//                'attributes' => array(
//                    'packing'=> $packing,
//                    'nds'=> $nds,
//                    'discount'=>$discount,
//                    'added_at' => Carbon::now(),
//                ),
//                'associatedModel' => $product,
//                'conditions' => [$saleCondition, $vatCondition]
//            );
//            \Cart::session($user_id)->add($item);
//        }else{
//            $item = array(
//                'id' => $product->id,
//                'name' => $product->name,
//                'price' => $product->price * $packing,
//                'quantity' => 1,
//                'attributes' => array(
//                    'packing'=> $packing,
//                    'nds'=> $nds,
//                    'added_at' => Carbon::now(),
//                ),
//                'associatedModel' => $product,
//                'conditions' => $vatCondition
//            );
//            // add the product to cart
//            \Cart::session($user_id)->add($item);
//        }
//        return redirect()->route('order.items.index',compact('order_id'))->with(
//            [
//                'message'=>__('Товар добавлен в корзину!'),
//                'alert-type'=>'success'
//            ]
//        );
//    }

//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        $item=OrderItems::findOrFail($id);
//        return view('order_items.show',compact('item'));
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $array=OrderItems::findOrFail($id);

        $array = OrderItems::findOrFail($id);
        $order_id=$array->order_id;
        $products = Product::all();
        $product = Product::find($array->product_id);

        return view('order_items.edit-add',compact('array','order_id','products','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    //    $order_id = $request->order_id;
    //    $product = Product::findOrFail($request->product_id);

    //    $quantity = $request->quantity;
    //    $packing = intval($request->packing);

    //    $price = $product->price * $packing;
    //    $nds = HelperService::NdsPrice($price * $quantity);

        OrderItems::findOrFail($id)->update([
            'red_line' => ($request->red_line == "on")?1:0,
            'packing' => $request->packing,
            'quantity' => $request->quantity
        ]);

        return redirect()->route('order.items.index',['id'=>$request->order_id])->with(
            [
                'message'=>__('Товара обновлен!'),
                'alert-type'=>'success'
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        OrderItems::where('id',$id)->delete();

        return redirect()->back()->with(
            [
                'message'=>__('Товар удален из корзины!'),
                'alert-type'=>'success'
            ]
        );
    }

}
