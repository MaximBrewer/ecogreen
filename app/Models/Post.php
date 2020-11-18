<?php

namespace App\Models;

use App\Traits\DateFormatter;
use Illuminate\Database\Eloquent\Model;
use  \TCG\Voyager\Traits\Translatable;
class Post extends Model
{
    use Translatable, DateFormatter;
    //
    protected $table="posts";
    protected $guarded=[""];

    protected $casts = [
        'images' => 'array'
    ];

    public static $PAGINATE = 20;

    /**
     * Get the faqs
     */
    public function faqs()
    {
        return $this->hasMany(FAQ::class, 'post_id','id');
    }

    /**
     * Get the post
     * @param $query
     * @return
     */
    public function scopePostarticle($query)
    {
        return $query->where('type','=','article');
    }
}
