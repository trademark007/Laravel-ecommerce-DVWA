<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $connection = 'mysql_pasardistro_main';
    protected $table = 'payment';
    protected $fillable = ['uuid','payment_type','vendor','allowed'];


}
