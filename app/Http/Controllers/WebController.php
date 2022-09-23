<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Help;
use App\Models\HelpCard;
use App\Models\Item;
use App\Models\Payment;
use Auth;
use DB;

class WebController extends Controller
{
    public function index(){
        $data=home::first();
        return view('frontend.layout.index', compact('data'));
    }

    public function blog(){
        $data=home::first();
        return view('frontend.layout.blog',  compact('data'));
    }

    public function contact(){
        $data = Home:: first();
        return view('frontend.layout.contact',compact('data'));
    }

    public function help(){
        $data = Home::first();
        $helpdata=help::first();
        $helpCard = HelpCard::all();
        return view('frontend.layout.help', compact('helpdata','data','helpCard'));
    }

    public function Error(){
        return view('frontend.layout.Error');
    }

    public function confirm(){
        return view('frontend.layout.confirm');
    }

    public function order(){
        return view('frontend.layout.order');
    }

  public function blog_post(){
      return view('frontend.layout.blog_post');
  }

  public function order_collection(){
    $data['data'] = Home:: first();
    $data['items']  = Item::where('collection',1)->with('size','ingredient')->get();
     $payment=Payment::first();
      return view('frontend.layout.order_collection' ,$data,compact('payment'));
  }

  public function delivery_order(){
    $data['data']  = Home:: first();
    $data['items']  = Item::where('delivery',1)->with('size','ingredient')->get();
    $payment=Payment::first();
  
    return view('frontend.layout.delivery_order',$data,compact('payment'));
}

  public function register(){
      return view('frontend.layout.register');
  }
 
  public function table_service(){
      $data['data'] = Home:: first();
      $data['items']  = Item::where('table_service',1)->with('size','ingredient')->get();
       $payment=Payment::first();
      return view('frontend.layout.table_service',$data,compact('payment'));
  }
  
}
