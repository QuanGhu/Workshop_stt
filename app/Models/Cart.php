<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    protected $fillable = [
        'qty','product_id','users_id'
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\Users','users_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product','product_id');
    }
}
