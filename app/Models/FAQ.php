<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FAQ extends Model
{

    protected $table = 'faqs';

    protected $guarded = [""];

    /**
     * Validation rules for this model
     */
    static public $rules = [
        'question'    => 'required|min:3:max:255',
        'answer'      => 'required|min:5:max:1500',
        'category_id' => 'required|exists:faq_categories,id',
    ];

//    protected function getSlugOptions()
//    {
//        return SlugOptions::create()->generateSlugFrom('question');
//    }
//
//    /**
//     * Get the summary text
//     *
//     * @return mixed
//     */
//    public function getAnswerSummaryAttribute()
//    {
//        return substr(strip_tags($this->attributes['answer']), 0, 80) . '...';
//    }

    /**
     * Get the category
     */
    public function category()
    {
        return $this->belongsTo(FaqCategory::class, 'category_id', 'id');
    }
}
