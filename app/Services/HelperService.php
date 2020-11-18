<?php
namespace App\Services;

use Carbon\Carbon;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Auth;
use NumberToWords\NumberToWords;

class HelperService
{

    public static $NDS_PERCENTAGE = '16.665';
    public static $LIMIT_PRODUCT = 100;

    public static function presentPrice($price)
    {
        return number_format($price , 2);
    }

    public static function getNumbers()
    {
        if(self::CheckAuth()){
            /**
             * get all items in cart
             *
             * @var \Cart $items
             */
            $items = \Cart::session(auth()->user()->id)->getContent()->sortBy(function ($cart) {
                return $cart->attributes->get('added_at');
            });


            /**
             * the new total in which conditions are already applied
             *
             * @return float
             */
            $total = \Cart::session(auth()->user()->id)->getTotal();

        }else{
            /**
             * get all items in cart
             *
             * @var \Cart $items
             */
            $items = \Cart::session(\request()->session()->getId())->getContent()->sortBy(function ($cart) {
                return $cart->attributes->get('added_at');
            });


            /**
             * the new total in which conditions are already applied
             *
             * @return float
             */
            $total = \Cart::session(\request()->session()->getId())->getTotal();
        }

        $sum_vat = 0;
        $discounts = [];
        $sale_prices = [];
        $subtotals = [];
        foreach($items as $item)
        {
            $sum_vat += $item->attributes->nds;
            $discounts[$item->id] = $item->attributes->discount;
            $sale_prices[$item->id] = self::subtractDeciminals($item->getPriceSumWithConditions(),self::presentPrice($item->attributes->nds));
            $subtotals[$item->id] = $item->getPriceSumWithConditions();
        }


        return collect([
            'subtotals' => $subtotals,
            'ndsTotal' => $sum_vat,
            'discounts' => $discounts,
            'sale_prices' => $sale_prices,
            'total' => $total,
            'items' => $items
        ]);
    }

    public static function packingRound($num){
        if ($num%10 > 5){
            return round($num, -1);
        }elseif ($num%10 < 5 && $num%10>0){
            return round($num, -1) + 5;
        }else{
            return $num;
        }
    }
    //get VAT(NDS) price of product
    public static function NdsPrice($price){
        return round($price/100*self::$NDS_PERCENTAGE,3);
    }
    //convert from deciminal and subtracking
    public static function subtractDeciminals($price1,$price2){
        $price1 = str_replace(',','',$price1);
        $price2 = str_replace(',','',$price2);
        return self::presentPrice($price1-$price2);
    }
    public static function CheckAuth(){
        if(Auth::user())
            return true;
        return false;
    }

    public static function numberToWord($num){

        // create the number to words "manager" class
        $numberToWords = new NumberToWords();

        // build a new currency transformer using the RFC 3066 language identifier
        $currencyTransformer = $numberToWords->getCurrencyTransformer('ru');
        $result = $currencyTransformer->toWords($num, 'RUB'); // outputs "fifty dollars ninety nine cents"
        return $result;
    }
}
