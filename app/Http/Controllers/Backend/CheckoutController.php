<?php

namespace App\Http\Controllers\Backend;

use App\Models\Orders;
use App\Models\OrdersDetail;
use App\Models\CustomersOrders;
use Webpatser\Uuid\Uuid;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        return view('frontend.checkout.checkout');
    }

    public function storePayment()
    {
        $payment = new Payment;
        $payment->uuid = utf8_encode(Uuid::generate(4));
        $payment->payment_type = $request->payment_type;
        $payment->vendor = $request->vendor;
        $payment->allowed = $request->allowed;
        $payment->save();
    }
}

