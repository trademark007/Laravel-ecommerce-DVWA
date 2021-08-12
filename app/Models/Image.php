<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $connection = 'mysql_pasardistro_main';
    protected $table = 'image';
    protected $fillable = ['image','image_two','image_three','image_four','image_five'];
}