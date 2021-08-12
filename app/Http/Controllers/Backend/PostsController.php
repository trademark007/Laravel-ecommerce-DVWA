<?php

namespace App\Http\Controllers\Backend;

use DB;
use Auth;
use App\Models\Product;
use App\Models\CategoryProduct;
use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Webpatser\Uuid\Uuid;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\ProductPost;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $product = Cache::remember('product', 10* 60, function (){
            return Product::ProductData()->get();
        });

        return view('backend.product.posts',compact('product'));
    }

    public function store(Request $request)
    {
        // $validated = $request->validated();
        $validated = $request->validate([
            'name' => 'required|min:4|max:225',
            'description' => 'required|min:10|max:10000',
            'size' => 'required|size|max:5',
            'color' => 'required|size|max:5',
            'material' => 'required|min:5|max:225',
            'weight' => 'required|min:5|max:225',
            'guarantee' => 'required|min:3|max:225',
            'price' => 'required|min:5|max:225',
            'slug' => 'required|min:5|max:225',
        ]);

        $image = new Image;
        $image->uuid = utf8_encode(Uuid::generate(4));

        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('public/images/posts/',$newName);
        $image->image = $newName;

        $file = $request->file('image_two');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('public/images/posts/',$newName);
        $image->image_two = $newName;

        $file = $request->file('image_three');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('public/images/posts/',$newName);
        $image->image_three = $newName;

        $file = $request->file('image_four');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('public/images/posts/',$newName);
        $image->image_four = $newName;

        $file = $request->file('image_five');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('public/images/posts/',$newName);
        $image->image_five = $newName;
        
        $image->save();

        $product = new Product;
        $product->uuid = utf8_encode(Uuid::generate(4));
        $product->author_id = Auth::user()->id;
        $product->category_id = $request->category_id;
        $product->image_id = $image->id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->size = $request->size;
        $product->color = $request->color;
        $product->material = $request->material;
        $product->weight = $request->weight;
        $product->guarantee = $request->guarantee;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->slug = $request->slug;
        $product->status = 'PENDING';
        $product->save();

        $category = new CategoryProduct;
        $category->uuid = utf8_encode(Uuid::generate(4));
        $category->product_id = $product->id;
        $category->category_id = $product->category_id;
        $category->save();

        toastr()->success('product success input to database!');
        return back();
        // return response()->json([
        //     'status' => 200,
        //     'message' => 'success',
        //     'product' => $product,
        //     'image' => $image
        // ]);
    }

    public function create()
    {
        $category = Category::all();
        return view('backend.product.create',compact('category'));
    }

    public function show($uuid)
    {
        $product = Product::where('uuid',$uuid)->first();
        return view('frontend.cart.cart',compact('product'));
    }
    
}

