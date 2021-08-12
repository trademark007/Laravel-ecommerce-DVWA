<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $connection = 'mysql_pasardistro_main';
    protected $table = 'category_product';
    protected $fillable = [
        'product_id','category_id'
    ];
}
