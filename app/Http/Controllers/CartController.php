<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderedUserDetail;
use App\Models\Payment;
use Illuminate\Http\Request;
use PDF;
use function Psy\sh;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class CartController extends Controller
{
    public function pdfview(Request $request)
    {
        $items = FacadesDB::table("items")->get();
        view()->share('items',$items);


        if($request->has('download')){
            $pdf = PDF::loadView('pdfview');
            return $pdf->download('pdfview.pdf');
        }


        return view('pdfview');
    }
    public function add_to_Cart_delivery(Request $request, $id ){
        $item   = Item::findOrFail($id);
        $cart   = session()->has('cart') ? session()->get('cart') : [];
        
        if(isset($cart[$id]))
        {
            $cart[$id]['quantity']++;
        }elseif($item->delivery == 1)
        {
            $cart[$id] = [
                'id' => $item->id,
                'name' => $item->name,
                'quantity' => 1,
                'price' => $item->price,
                'type' => 'Delivery'
            ];
        }
        session()->put('cart',$cart);
        session()->flash('message', $item->name.' added to cart.');
        $data   =   [];
        $data['cart']   =   session()->has('cart') ? session()->get('cart') : [];
        return redirect()->back()->with('success','added to cart');
      }
      public function add_to_Cart_collection(Request $request, $id ){
        $item   = Item::findOrFail($id);
        $cart   = session()->has('cart') ? session()->get('cart') : [];
        
        if(isset($cart[$id]))
        {
            $cart[$id]['quantity']++;
        }elseif($item->collection == 1)
        {
            $cart[$id] = [
                'name' => $item->name,
                'quantity' => 1,
                'price' => $item->price,
                'type' => 'Collection'
            ];
        }
        
        session()->put('cart',$cart);
        session()->flash('message', $item->name.' added to cart.');
        $data   =   [];
        $data['cart']   =   session()->has('cart') ? session()->get('cart') : [];
        return redirect()->back();
      }
      public function add_to_Cart_table(Request $request, $id ){
        $item   = Item::findOrFail($id);
        $cart   = session()->has('cart') ? session()->get('cart') : [];
        
        if(isset($cart[$id]))
        {
            $cart[$id]['quantity']++;
        }elseif($item->table_service == 1)
        {
            $cart[$id] = [
                'name' => $item->name,
                'quantity' => 1,
                'price' => $item->price,
                'type' => 'Table Service'
            ];
        }
        
        session()->put('cart',$cart);
        session()->flash('message', $item->name.' added to cart.');
        $data   =   [];
        $data['cart']   =   session()->has('cart') ? session()->get('cart') : [];
        return redirect()->back();
      }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function remove($id)
    {
        if($id) {
            $cart = session()->get('cart');
                unset($cart[$id]);
                session()->put('cart', $cart);
            return redirect()->back();
        }
    }
    public function cart()
    {
        if(!empty(session()->get('cart')))
        {
            $data['data'] = Home:: first();
            $payment=Payment::first();
            return view('frontend.layout.order',$data,compact('payment'));
        }
        else
        {
            return back()->with('error','Cart Empty!');
        }
    }
    public function store(Request $request){
        request()->validate([
            'email' => 'email',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        $response = Order::saveOrder($request);
        if($response['order_id']){
            $detail = OrderDetail::saveOrderDetails($request, $response['order_id']) ;           
            OrderedUserDetail::saveOrderOrderedUserDetail($request, $response['order_id']);
        }
        session()->put('order_id' , $response['order_id']);
        return redirect('stripe');
    }
}
