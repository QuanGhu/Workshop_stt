<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $fillable = [
        'email', 'password','first_name','last_name','address',
        'role_id'
    ];

    public function orderMaster()
    {
        return $this->hasMany('App\Models\OrderMaster','users_id');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role','role_id');
    }

    public function cart()
    {
        return $this->hasMany('App\Models\Cart','users_id');
    }
}
