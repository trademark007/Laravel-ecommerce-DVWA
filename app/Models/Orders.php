<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $connection = 'mysql_pasardistro_main';
    protected $table = 'orders';
    protected $fillable = ['uuid','order_number','logistic_id','customer_id','payment_id','order_date','status','payment_date'];

    public function customersorders()
    {
        return $this->belongsTo('App\Models\CustomersOrders','id');
    }

    public function payment()
    {
        return $this->belongsTo('App\Models\Payment');
    }
}


