<?php

namespace App\Models;

use BWF\DocumentTemplates\TemplateDataSources\ModelProvidesTemplateData;
use BWF\DocumentTemplates\TemplateDataSources\TemplateDataSourceInterface;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model implements TemplateDataSourceInterface
{
    use ModelProvidesTemplateData;
    protected $table = 'orders';
    protected $guarded=[];
    protected $fillable=[
        'id',
        'user_id',
        'order_nr',
        'billing_email',
        'billing_name',
        'billing_address',
        'billing_phone',
        'billing_city',
        'type_credit',
        'shipping_type_id',
        'payment_type_id',
        'status_id',
        'billing_discount',
        'billing_total',
        'billing_total_sale',
        'billing_nds_total',
        'billing_nds_total_sale'
    ];

    public function getUser(){
        return $this->belongsTo('App\User','user_id');
    }
    public function getPaymentType(){
        return $this->belongsToMany(OrderPaymentType::class,'payment_type_id');
    }
    public function getShippingType(){
        return $this->belongsToMany(OrderShippingType::class,'shipping_type_id');
    }
    public function getStatus(){
        return $this->belongsToMany(OrderStatus::class,'status_id');
    }
    /**
     *  Get columns for template
     * @return array|string[]
     */
    protected function getTemplateFields()
    {
        return $this->fillable;
    }

}
