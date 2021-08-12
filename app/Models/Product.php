<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $connection = 'mysql_pasardistro_main';
    protected $table = 'product';
    protected $fillable = ['uuid','author_id','category_id','image_id','name','seo_title','excerpt','description','price','sku','stock','image','slug','meta_description','meta_keywords','status','featured'];
    
    public function scopeProductData($query)
    {
        $query->where('name','!=',NULL);
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','author_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }

    public function image()
    {
        return $this->belongsTo('App\Models\Image');
    }

    public function categoryproduct()
    {
        return $this->belongsTo('App\Models\CategoryProduct');
    }

    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
}


