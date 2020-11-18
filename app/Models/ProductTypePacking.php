<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTypePacking extends Model
{
    protected $table="product_type_packings";
    protected $guarded=[""];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function getFromCatalog($items){
        return $items;
    }
}
