<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryItems extends Model
{
    protected $table="category_items";
    protected $guarded=[""];

    public function getCatGroup(){

        return $this->belongsTo(Category::class,'cat_id','id');
    }
}
