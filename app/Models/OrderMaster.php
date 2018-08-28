<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderMaster extends Model
{
    protected $table = 'order_master';
    protected $fillable = [
        'invoice_no','total_invoice','total_qty','users_id'
    ];
    
    public function order()
    {
        return $this->hasMany('App\Models\Order','order_master_id');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\Users','users_id');
    }
}
