<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'name','price','stock','description','image','category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }

    public function cart()
    {
        return $this->hasMany('App\Models\Cart','product_id');
    }
}
