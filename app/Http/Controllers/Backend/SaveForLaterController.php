<?php

namespace App\Http\Controllers\Backend;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaveForLaterController extends Controller
{
    public function destroy($id)
    {
        Cart::instance('saveForLater')->remove($id);

        toastr()->success('item has been remove!');
        return back();
    }

    public function switchToCart($id)
    {
        $item = Cart::instance('saveForLater')->get($id);

        Cart::instance('saveForLater')->remove($id);

        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id){
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) {

            toastr()->success('Item is already saved for later!');
            return back();
        }

        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Models\Product');

        toastr()->success('item has been move to cart!');
        return back();
    }
}
