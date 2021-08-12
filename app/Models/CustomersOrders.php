<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomersOrders extends Model
{
    protected $connection = 'mysql_pasardistro_main';
    protected $table = 'customer_orders';

    protected $fillable = ['customer_email','customer_name','customer_address','customer_city','customer_province','customer_city','customer_postalcode','customer_phone','customer_phone2'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

