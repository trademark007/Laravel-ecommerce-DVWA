<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $connection = 'mysql_pasardistro_main';
    protected $table = 'category';
    protected $fillable = ['uuid','name','slug'];

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
}
