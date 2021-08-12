<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $category = Category::all();
        return view('frontend.product.product-list',compact('product','category'));
    }

    public function welcome_index()
    {
        $product = Product::all();
        return response()->json($product);
    }
}
