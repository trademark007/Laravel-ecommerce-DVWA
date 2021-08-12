<?php

namespace App\Http\Controllers\Backend;

use App\Models\Orders;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Models\CustomersOrders;
use Webpatser\Uuid\Uuid;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{

    public function storeCustomerData(Request $request)
    {

        $customers = new CustomersOrders;
        $customers->uuid = utf8_encode(Uuid::generate(4));
        $customers->user_id = $request->user_id;
        $customers->customer_email = $request->customer_email;
        $customers->customer_name = $request->customer_name;
        $customers->customer_address = $request->customer_address;
        $customers->customer_city = $request->customer_city;
        $customers->customer_province = $request->customer_province;
        $customers->customer_postalcode = $request->customer_postalcode;
        $customers->customer_phone = $request->customer_phone;
        $customers->customer_phone2 = $request->customer_phone2;
        $customers->save();

        $ordersDetail = new OrderDetail;
        $ordersDetail->uuid = utf8_encode(Uuid::generate(4));
        $ordersDetail->user_id = $customers->id;
        $ordersDetail->product_id = 1;
        $ordersDetail->price = $request->price;
        $ordersDetail->quantity = $request->quantity;
        $ordersDetail->size = $request->size;
        $ordersDetail->color = $request->color;
        $ordersDetail->save();        

        $payment = new Payment;
        $payment->uuid = utf8_encode(Uuid::generate(4));
        $payment->payment_type = $request->payment_type;
        $payment->vendor = $request->vendor;
        $payment->allowed = $request->allowed;
        $payment->save();

        $orders = new Orders;
        $orders->uuid = utf8_encode(Uuid::generate(4));
        $orders->order_number = 'ORDER'.'-'.mt_rand(100,1000);
        $orders->logistic_id = 1;
        $orders->customer_id = $customers->id;
        $orders->order_date = Carbon::now();
        $orders->status = 'Pending';
        $orders->payment_date = Carbon::now();
        $orders->payment_id = $payment->id;
        $orders->save();
        
        return response()->json([
            'status' => 200,
            'message' => 'success',
            'customer' => $customers, 'order detail' => $ordersDetail,'payment' => $payment
        ]);

    }


    public function user()
    {
        
        $user = CustomersOrders::all();
        for ($i=0; $i < count($user); $i++) { 
            $user[$i]->order_detail = OrderDetail::where('user_id',$user[$i]->user_id)->get();
            $user[$i]->payment = Payment::where('user_id',$user[$i]->user_id)->get();
        }

        return response()->json([
            'status' => 200,
            'data' => $user
        ]);
        
    }
}




