<?php

namespace App\Models;

use App\Services\HelperService;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    protected $guarded =[""];

    public function getPacking(){
        return $this->hasMany(ProductTypePacking::class, 'product_id', 'id');
    }

    public function getChemical(){

        return $this->belongsTo('App\Models\Chemical', 'class_id', 'id');
    }
    public function getActiveSubstance(){

        return $this->belongsTo('App\Models\ActiveSubstance','active_substance_id','id');
    }
    public function getBrand(){

        return $this->belongsTo('App\Models\Brand','brand_id','id');
    }

    public function getCategoryItems() {
        return $this->belongsToMany(CategoryItems::class, 'products_and_category_items', 'product_id', 'cat_items_id');
    }

    public function presentPrice($price)
    {
        return HelperService::presentPrice($price);
    }
}
