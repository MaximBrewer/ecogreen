<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\HelperService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{

    public function index()
    {
        /**
         * get all items in cart
         *
         * @var \Cart $items
         */
        $items = HelperService::getNumbers()->get('items');


        /**
         * the new total in which conditions are already applied
         *
         * @return float
         */
        $total = HelperService::getNumbers()->get('total');


        /**
         * You can get the conditions calculated value by providing the subtotal, see below:
         *
         * @var \Cart $condition
         */
        $ndsTotal = HelperService::getNumbers()->get('ndsTotal');


        return view('user_cabinet.basket')->with([
            'items' => $items,
            'total' => $total,
            'ndsTotal' => $ndsTotal
        ]);
    }

    /**
     * Add product to cart
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Darryldecode\Cart\Exceptions\InvalidConditionException
     */
    public function store(Request $request, $id)
    {
        if (\Cart::session(auth()->user()->id)->get($id)) {
            return response()->json([
                'message' => 'Товар уже в корзине!'
            ]);
        }

        $product = Product::findOrFail($id);

        // rounded value of packing
        $packing = $request->packing ?? $product->getPacking->first()->name;
        // nds_price of item
        $nds = HelperService::NdsPrice($product->price * $packing);
        $nds_percentage = HelperService::$NDS_PERCENTAGE;

        // condition for VAT(NDS)
        $vatCondition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'VAT',
            'type' => 'tax',
            'target' => 'subtotal',
            'value' => $nds_percentage . '%',
            'order' => 2
        ));
        $discount = $product->discount;

        if ($discount != null || $discount > 0) {
            // condition for discount
            $saleCondition = new \Darryldecode\Cart\CartCondition(array(
                'name' => 'SALE ' . $discount . '%',
                'type' => 'sale',
                'target' => 'subtotal',
                'value' => '-' . $discount . '%',
                'order' => 1
            ));
            // now the product to be added on cart
            $item = array(
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price * $packing,
                'quantity' => 1,
                'attributes' => array(
                    'packing' => $packing,
                    'nds' => $nds,
                    'discount' => $discount,
                    'added_at' => Carbon::now(),
                ),
                'associatedModel' => $product,
                'conditions' => [$saleCondition, $vatCondition]
            );
            \Cart::session(auth()->user()->id)->add($item);
        } else {
            $item = array(
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price * $packing,
                'quantity' => 1,
                'attributes' => array(
                    'packing' => $packing,
                    'nds' => $nds,
                    'added_at' => Carbon::now(),
                ),
                'associatedModel' => $product,
                'conditions' => $vatCondition
            );
            // add the product to cart
            \Cart::session(auth()->user()->id)->add($item);
        }
        return response()->json([
            'message' => 'Товар добавлен в корзину!'
        ]);
    }

    /**
     * Update packing or quantity of item in cart
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $product = Product::with('getPacking')->findOrFail($id);
        $quantity = $request->quantity;
        $packing = intval($request->packing);

        $pack_have_or_not = $product->getPacking->where('name', $packing)->first();

        if ($pack_have_or_not == null) {
            session()->flash('errors', collect([__('В настоящее время у нас недостаточно товаров на складе.')]));
            return response()->json(['success' => false, 'message' => __('В настоящее время у нас недостаточно товаров на складе.'), 'quantity' => 0], 400);
        }
        
        $pack_qty = $pack_have_or_not->quantity;

        $price = $product->price * $packing;
        $nds = HelperService::NdsPrice($price * $quantity);

        \Cart::session(auth()->user()->id)->update($id, [
            'quantity' => [
                'relative' => false,
                'value' => $quantity,
            ],
            'price' => $price,
            'attributes' => array(
                'packing' => $quantity > $pack_qty ? $pack_qty : $quantity,
                'nds' => $nds,
            ),
        ]);
        session()->flash('message', __('Количество товара обновлено!'));
        return response()->json(['success' => true, 'message' => __('Количество товара обновлено!'), 'quantity' => $quantity > $pack_qty ? $pack_qty : $quantity]);
    }

    /**
     * Removing cart item for a specific user's cart
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        \Cart::session(auth()->user()->id)->remove($id);
        if (\Cart::session(auth()->user()->id)->isEmpty()) {
            \Cart::session(auth()->user()->id)->clearCartConditions();
        }
        session()->flash('warning', __('Товар удален из корзины!'));
        return response()->json(['success' => true]);
    }

    /************************************** Methods for guests *******************************************************/

    public function indexGuest()
    {
        /**
         * get all items in cart
         *
         * @var \Cart $items
         */
        $items = HelperService::getNumbers()->get('items');


        /**
         * the new total in which conditions are already applied
         *
         * @return float
         */
        $total = HelperService::getNumbers()->get('total');


        /**
         * You can get the conditions calculated value by providing the subtotal, see below:
         *
         * @var \Cart $condition
         */
        $ndsTotal = HelperService::getNumbers()->get('ndsTotal');


        return view('user_cabinet.basket')->with([
            'items' => $items,
            'total' => $total,
            'ndsTotal' => $ndsTotal
        ]);
    }
    /**
     * Without redirect to cart index add method
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Darryldecode\Cart\Exceptions\InvalidConditionException
     */
    public function storeGuest(Request $request, $id)
    {
        if (\Cart::session(\request()->session()->getId())->get($id)) {

            return response()->json([
                'message' => 'Товар уже в корзине!'
            ]);
        }

        $product = Product::findOrFail($id);

        // rounded value of packing
        $packing = $request->packing ?? 5;
        // nds_price of item
        $nds = HelperService::NdsPrice($product->price * $packing);
        $nds_percentage = HelperService::$NDS_PERCENTAGE;

        // condition for VAT(NDS)
        $vatCondition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'VAT',
            'type' => 'tax',
            'target' => 'subtotal',
            'value' => $nds_percentage . '%',
            'order' => 2
        ));
        $discount = $product->discount;

        if ($discount != null || $discount > 0) {
            // condition for discount
            $saleCondition = new \Darryldecode\Cart\CartCondition(array(
                'name' => 'SALE ' . $discount . '%',
                'type' => 'sale',
                'target' => 'subtotal',
                'value' => '-' . $discount . '%',
                'order' => 1
            ));
            // now the product to be added on cart
            $item = array(
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price * $packing,
                'quantity' => 1,
                'attributes' => array(
                    'packing' => $packing,
                    'nds' => $nds,
                    'discount' => $discount,
                    'added_at' => Carbon::now(),
                ),
                'associatedModel' => $product,
                'conditions' => [$saleCondition, $vatCondition]
            );
            \Cart::session(\request()->session()->getId())->add($item);
        } else {
            $item = array(
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price * $packing,
                'quantity' => 1,
                'attributes' => array(
                    'packing' => $packing,
                    'nds' => $nds,
                    'added_at' => Carbon::now(),
                ),
                'associatedModel' => $product,
                'conditions' => $vatCondition
            );
            // add the product to cart
            \Cart::session(\request()->session()->getId())->add($item);
        }

        return response()->json([
            'message' => 'Товар добавлен в корзину!'
        ]);
    }
    /**
     * Update packing or quantity of item in cart
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateGuest(Request $request, $id)
    {
        $product = Product::with('getPacking')->findOrFail($id);
        $quantity = $request->quantity;
        $packing = intval($request->packing);
        //        $pack_have_or_not = $product->getPacking->where('name',$packing)->first();
        //        if ($pack_have_or_not == null) {
        //            session()->flash('errors', collect(['В настоящее время у нас недостаточно товаров на складе.']));
        //            return response()->json(['success' => false], 400);
        //        }
        //get value of type packing
        //        $pack_qty = $product->getPacking->where('name',$packing)->firstOrFail()->value('quantity');
        //        if ($quantity > $pack_qty) {
        //            session()->flash('errors', collect(['В настоящее время у нас недостаточно товаров на складе.']));
        //            return response()->json(['success' => false], 400);
        //        }
        $price = $product->price * $packing;
        $nds = HelperService::NdsPrice($price * $quantity);

        \Cart::session(\request()->session()->getId())->update($id, [
            'quantity' => [
                'relative' => false,
                'value' => $quantity,
            ],
            'price' => $price,
            'attributes' => array(
                'packing' => $packing,
                'nds' => $nds,
            ),
        ]);
        session()->flash('success', __('Количество товара обновлено!'));
        return response()->json(['success' => true]);
    }

    /**
     * Removing cart item for a specific user's cart
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteGuest($id)
    {
        \Cart::session(\request()->session()->getId())->remove($id);
        if (\Cart::session(\request()->session()->getId())->isEmpty()) {
            \Cart::session(\request()->session()->getId())->clearCartConditions();
        }
        session()->flash('warning', __('Товар удален из корзины!'));
        return response()->json(['success' => true]);
    }
    /**
     * Get count items of cart
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function countItems()
    {
        $items = HelperService::getNumbers()->get('items');
        $count = count($items);
        return response()->json(['result' => $count]);
    }
}
