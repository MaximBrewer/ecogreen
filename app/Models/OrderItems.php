<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $table="order_items";
    protected $guarded=[];

    public function getProduct(){
        return $this->belongsTo('App\Models\Product','product_id','id');
    }
    public function getProductTypePacking(){
        return $this->belongsTo('App\Models\ProductTypePacking','product_type_packing_id','id');
    }
    public function getOrder(){
        return $this->belongsTo('App\Models\Order','order_id','id');
    }

    // for test
    protected $appends = ['notAvailable'];

    public function getNotAvailableAttribute()
    {
        $product = Product::findOrFail($this->product_id);
        $pack_have_or_not = $product->getPacking->where('name',$this->packing)->first();
        if ($pack_have_or_not == null) {
            return false;
        }else{
            //get value of type packing
            $pack_qty = $product->getPacking->where('name',$this->packing)->first()->value('quantity');
            if ($this->quantity > $pack_qty) {
                return false;
            }
        }
        return true;
    }
}
