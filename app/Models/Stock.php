<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $connection = 'PASARDISTRO-STOCK';
    protected $table = 'stock';
    protected $fillable = [
        'uuid',
        'segment_id',
        'items_name',
        'items_code',
        'type',
        'buy_price',
        'sell_price',
        'input_date',
        'status'
    ];
}
