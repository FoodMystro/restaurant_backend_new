<?php

namespace App\Http\Controllers;
use Session;
use Stripe;
use App\Models\Home;
use App\Models\Payment;
use App\Models\Order;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function stripe()
    {
         $order_id = session()->get('order_id');
         $order = Order::where('id' , $order_id)->first();
         $payment=Payment::first();
         $data=Home::first();
        return view('frontend.layout.stripe',compact('data' , 'order','payment'));
    }

    public function stripePost(Request $request)
    {
            $order_id = session()->get('order_id');
            $order = Order::where('id' , $order_id)->first();
           
 
            
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            
          
                "amount" => $order->grand_total*100,
                "currency" => "USD",
                "source" => $request->stripeToken,
                "description" => "This is test payment",
        ]);
        session()->forget('order_id');
        session()->forget('cart');
        Session::flash('success', 'Payment Successful !');
           
        return redirect('/');
    }
}