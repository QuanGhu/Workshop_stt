<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = [
        'product_category','product_name','product_price',
        'qty','order_master_id'
    ];

    public function orderMaster()
    {
        return $this->belongsTo('App\Models\OrderMaster','order_master_id');
    }
}
