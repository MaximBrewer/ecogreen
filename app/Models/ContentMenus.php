<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentMenus extends Model
{
    protected $table = 'content_menus';
    protected $fillable = [
        'name',
        'slug',
        'images',
        'description',
        'body_footer',
    ];
    protected $casts = [
        'images' => 'object'
    ];
}
