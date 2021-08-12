<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cartDetail()
    {
        // dd(Cart::content());
        return view('frontend.cart.cartDetail');
    }

    public function index()
    {
        $mightAlsoLike = Product::where('slug','!=',$slug)->inRandomOrder()->take(1)->get();
        return view('frontend.cart.cartDetail')->with('mightAlsoLike',$mightAlsoLike); 
    }

    public function storeCart(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'id' => 'required',
        ]);

        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request){
            return $cartItem->id === $request->id; 
        });

        if ($duplicates->isNotEmpty()) {
            toastr()->error('Item sudah ada di keranjang!');
            return back();
        }

        /* no validation which mean the suspicious users is able to send - values to cart */
        Cart::add($request->id, $request->name, 1, $request->price)->Associate('App\Models\Product');

        toastr()->success('item add to your cart!');
        return back();
    }

    public function destroyCart($id)
    {
        Cart::remove($id);

        toastr()->success('item has been remove!');
        return back();
    }

    public function switchToSaveForLater($id)
    {
        $item = Cart::get($id);

        Cart::remove($id);

        $duplicates = Cart::instance('saveForLater')->search(function ($cartItem, $rowId) use ($id){
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) {
            toastr()->success('Item is already saved for later!');
            return back();
        }

        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Models\Product');

        toastr()->success('item has been save for later!');
        return back();
    }
   
}
