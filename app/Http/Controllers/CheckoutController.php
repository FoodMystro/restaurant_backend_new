<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        request()->validate([
            'email' => 'email|unique:checkouts',
            'image' => 'image|mimes:png,jpg,jpeg|max:5048',
        ]);
        echo '<pre>'; print_r($request->all()); exit;
        $response = Order::saveOrder($request);

        Order::insert([
            'f_name' => $request->input('f_name'),
            'l_name' => $request->input('l_name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'zipcode' => $request->input('zipcode')
             
            ]);
    
        return redirect('/admin/checkout')->with('status',"Success");
       
    }

}
