<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    protected $connection = 'mysql_pasardistro_stock';
    protected $table = 'segment';
    protected $fillable = [
        'segment_name','qty','category'
    ];
}
