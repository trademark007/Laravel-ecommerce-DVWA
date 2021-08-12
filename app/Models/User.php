<?php

namespace App\Models;

use App\Traits\LockableTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable,LockableTrait;

    protected $connection = 'mysql';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','email','gender','role','status','city','country','password', 'lockout_time',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeUserData($query)
    {
        $query->where('status','=',1);
    }

    // satu admin bisa memiliki banyak produk
    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }

    // satu user bisa memiliki beberapa orders
    public function customersorders()
    {
        return $this->hasMany('App\Models\CustomersOrders');
    }
}
