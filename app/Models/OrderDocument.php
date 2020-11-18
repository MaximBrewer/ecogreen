<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDocument extends Model
{
    protected $table = 'order_documents';
    protected $fillable = ['file', 'order_id'];
}
