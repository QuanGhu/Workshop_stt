<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderMaster extends Model
{
    protected $table = 'order_master';
    protected $fillable = [
        'invoice_no','total_invoice','total_qty','users_id'
    ];
    
}
