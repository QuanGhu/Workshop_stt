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
}
