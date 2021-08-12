<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $connection = 'mysql_pasardistro_main';
    protected $table = 'orders_detail';
    protected $fillable = ['uuid','user_id','product_id','price','quantity','size','color'];

}
