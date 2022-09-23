<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Home;
use App\Models\Help;
use App\Models\HelpCard;
use App\Models\Category;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderedUserDetail;
use App\Models\Item_Option;
use App\Models\Ingredients;
use App\Models\Payment;
use App\Models\Email;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Auth;
use DB;
use PDF;

use Dompdf\dompdf;

class MainController extends Controller
{
    public function dashboard(){
        
        
        $items=item::all()->count();
        $total_order=Order::where('status','Pending')->orwhere('status','Processed')->count();
        $new_order=Order::where('status','Pending')->count();
        return view('backend.layout.dashboard',compact('items','total_order','new_order'));
    }

    public function add_menu_item(){
        $data = Item::first();
        $categoryname = Category::all();
        return view('backend.layout.add_menu_item',compact('data','categoryname'));
    }

    public function category(){
        $data['category']=Category::all();
        return view('backend.layout.category')->with($data);
    }

    public function add_category(){
        $data= Category::first();
        // dd(auth()->user()->role);
        return view('backend.layout.add_category',compact('data'));
    }

    public function user_profile(){
        $user = User::first();
        return view('backend.layout.user_profile',compact('user'));
    }

    public function business_information(){
        return view('backend.layout.business_information');
    }

    public function admin_backend(){

        if( Auth()->user()->role == 'super'){

        $admin = User::all();
        return view('backend.layout.admin_backend', compact('admin'));
    }abort(404);
    }

    public function edit_admin($id){
        if( auth()->user()->role == 'super'){
        $data = User::find($id);
        // dd($data);
        return view('backend.layout.edit_admin',compact('data'));
        }abort(404);
    }
    
    public function add_new_admin(){
        if( auth()->user()->role == 'super'){
        $data = User::first();
        return view('backend.layout.add_new_admin',compact('data'));
        }abort(404);
    }

    public function payment_marchant(){
        if( auth()->user()->role == "super" || auth()->user()->role == "admin"){
        $payment = Payment::first();
        return view('backend.layout.payment_marchant',compact('payment'));
        }
        abort(404);
    }

    public function delivery_management(){
        if( auth()->user()->role == "super" || auth()->user()->role == "admin"){
        return view('backend.layout.delivery_management');
        }
        abort(404);
    }

    // public function store_management(){
    //     if( auth()->user()->role == "super" || auth()->user()->role == "admin"){
    //         return view('backend.layout.store_management');
    //     }
    //     abort(404);
    // }

   public function email(){
       $email = Email::first();
       return view('backend.layout.email',compact('email'));
   }

    public function menu_items(){
        $menu = Item::all();
        $all_item=count($menu);

        $count =Item::where('availability',1)->get();
        $availability=count($count);
            //   dd( $count);

        $out_of_stock =Item::where('availability',0)->get();
        $out_of_stock=count($out_of_stock);
          //   dd( $count);

        $total_cat=category::all();
        $total_category=count($total_cat);

        return view('backend.layout.menu_management',compact('menu','availability','all_item','out_of_stock','total_category'));
    }

    public function order_management(){
        $data['orders'] = $ordr =  Order::with('order_detail','ordered_user')->get();
        $total_order=Order::all()->pluck('name')->count();
        $pending_order=Order::where('status','Pending')->count();
        $processed_order=Order::where('status','Processed')->count();
        $cancelled_order=Order::where('status','Cancelled')->count();
        return view('backend.layout.order_management',$data,compact('pending_order','processed_order','cancelled_order','total_order'));
    }

    public function edit_order($id){
       $data['order']  =  Order::where('id',$id)->with('order_detail','ordered_user')->first();
        $data['order_details']  =  OrderDetail::where('order_id',$id)->with('items')->get();
        return view('backend.layout.edit_order',$data);
    }
    public function pdf_download($id){
        $data['order']  =  Order::where('id',$id)->with('order_detail','ordered_user')->first();
        $data['order_details']  =  OrderDetail::where('order_id',$id)->with('items')->get();
        $pdf = PDF::loadView('backend.layout.pdf_invoice_order', $data);

        return $pdf->download('invoice.pdf');
        // $pdf = PDF::loadView('backend.layout.pdf_invoice_order', $data);
    
        // return $pdf->download('itsolutionstuff.pdf');
        // $dompdf = new Dompdf();
        // $dompdf->loadHtml(view('backend.layout.pdf_invoice_order',$data));
        // $dompdf->render();
        // $dompdf->stream('Ivoice.pdf',['Attachment'=>false]);
    }
    public function update_order_status_pending($id,Request $request){
        // dd($request);
        $order  =  Order::find('id',$id);
        $order->status = 'Pending';
        $order->update();
        return response()->json(['success'=>'Status change successfully.']);
    }
    public function update_order_status_cancel($id,Request $request){
        // dd($request);
        $order  =  Order::find('id',$id);
        $order->status = 'Cancelled';
        $order->update();
        return response()->json(['success'=>'Status change successfully.']);
    }
    public function update_order_status(Request $request){
        $order  =  Order::where('id',$request->order_id)->first();
        // dd($order);
        
        $order->status = $request->status;
        $order->update();
        return  redirect()->route('order_management')->with('success' , 'updated');
    }

    public function invoice(){
        return view('backend.layout.invoice');
    }


    public function delete_order($id){
        if( 
            auth()->user()->role == "super" || 
            auth()->user()->role == "admin" ||
            auth()->user()->role == "manager"
            )
        {
            // dd($id);
        OrderedUserDetail::where('order_id',$id)->delete();
        OrderDetail::where('order_id',$id)->delete();
        Order::where('id',$id)->delete();
        return back();
        }
    }



                                        // functions for website CMS

    public function cms_home(){
        
        if( auth()->user()->role == "super" || auth()->user()->role == "admin"){
            $data = Home::first();
            // dd($data);
            return view('backend.layout.website.cms_home',compact('data'));
        }
        abort(404);
    }

    public function help_cms(){
        if( auth()->user()->role == "super" || auth()->user()->role == "admin"){
            $helpdata = Help::first();
            return view('backend.layout.website.help_cms',compact('helpdata'));
        }
        abort(404);
    }

    public function help_card(){
        if( auth()->user()->role == "super" || auth()->user()->role == "admin"){
            $data['helpcard'] = HelpCard::all();
            return view('backend.layout.website.help_card', $data);
        }
        abort(404);
    }

    public function update(Request $request){
        // dd($request);
        if($request->input('delivery_status'))
        {
            $delivery_status = 1;
        }
        else{
            $delivery_status = 0;
        }

        if($request->input('collection_status'))
        {
            $collection_status = 1;
        }
        else{
            $collection_status = 0;
        }


        if($request->input('table_service_status')){
            $table_service_status = 1;
        }
        else{
            $table_service_status = 0;
        }
        // dd($request);
        $data= home::where('id',$request->id)->first();

            if($request->hasfile('logo'))
            {
            $destination = 'uploads/home_images/'.$data->logo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file= $request->file('logo');
            $extension= $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/home_images/',$filename);
            $data->logo =$filename;
            }

            $data->sec_1_heading                        = $request->input('sec_1_heading');
            $data->sec_1_paragraph                      = $request->input('sec_1_paragraph');
            $data->sec_1_heading1                       = $request->input('sec_1_heading1');
            $data->sec_1_heading2                       = $request->input('sec_1_heading2');
            $data->sec_1_heading3                       = $request->input('sec_1_heading3');

            $data->sec_1_heading4                       = $request->input('sec_1_heading4');
            $data->sec_1_heading5                       = $request->input('sec_1_heading5');
            $data->sec_1_heading6                       = $request->input('sec_1_heading6');
            $data->sec_1_heading7                       = $request->input('sec_1_heading7');
            $data->sec_1_heading8                       = $request->input('sec_1_heading8');
            $data->sec_1_heading9                       = $request->input('sec_1_heading9');
            $data->sec_1_heading10                      = $request->input('sec_1_heading10');
            $data->sec_1_heading11                      = $request->input('sec_1_heading11');

            if($request->hasfile('sec_1_right_img'))
            {
            $destination = 'uploads/home_images/'.$data->sec_1_right_img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file= $request->file('sec_1_right_img');
            $extension= $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/home_images/',$filename);
            $data->sec_1_right_img =$filename;
            }

            $data->sec_2_heading                         = $request->input('sec_2_heading');
            $data->sec_2_paragraph                       = $request->input('sec_2_paragraph');

            if($request->hasfile('sec_2_img1'))
            {
            $destination = 'uploads/home_images/'.$data->sec_2_img1;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file= $request->file('sec_2_img1');
            $extension= $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/home_images/',$filename);
            $data->sec_2_img1 =$filename;
            }

            $data->sec_2_heading_1                         = $request->input('sec_2_heading_1');
            $data->sec_2_paragraph_1                       = $request->input('sec_2_paragraph_1');
            $data->sec_2_card_1_status                     = $request->input('sec_2_card_1_status');

            if($request->hasfile('sec_2_img_2'))
            {
            $destination = 'uploads/home_images/'.$data->sec_2_img_2;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file= $request->file('sec_2_img_2');
            $extension= $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/home_images/',$filename);
            $data->sec_2_img_2 =$filename;
            }

            $data->sec_2_heading_2                         = $request->input('sec_2_heading_2');
            $data->sec_2_paragraph_2                       = $request->input('sec_2_paragraph_2');
            $data->sec_2_card_2_status                       = $request->input('sec_2_card_2_status');

            if($request->hasfile('sec_2_img_3'))
            {
            $destination = 'uploads/home_images/'.$data->sec_2_img_3;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file= $request->file('sec_2_img_3');
            $extension= $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/home_images/',$filename);
            $data->sec_2_img_3 =$filename;
            }

            $data->sec_2_heading_3                         = $request->input('sec_2_heading_3');
            $data->sec_2_paragraph_3                       = $request->input('sec_2_paragraph_3');
            $data->sec_2_card_3_status                       = $request->input('sec_2_card_3_status');

            if($request->hasfile('sec3_card1_img1'))
            {
            $destination = 'uploads/home_images/'.$data->sec3_card1_img1;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file= $request->file('sec3_card1_img1');
            $extension= $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/home_images/',$filename);
            $data->sec3_card1_img1 =$filename;
            }

            $data->sec3_card1_heading1                         = $request->input('sec3_card1_heading1');
            $data->sec3_card1_paragraph1                       = $request->input('sec3_card1_paragraph1');
            $data->sec_3_card_1_status                        = $request->input('sec_3_card_1_status');

            if($request->hasfile('sec3_card2_img2'))
            {
            $destination = 'uploads/home_images/'.$data->sec3_card2_img2;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file= $request->file('sec3_card2_img2');
            $extension= $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/home_images/',$filename);
            $data->sec3_card2_img2 =$filename;
            }


            $data->sec3_card2_heading2                         = $request->input('sec3_card2_heading2');
            $data->sec3_card2_paragraph2                       = $request->input('sec3_card2_paragraph2');
            $data->sec_3_card_2_status                        = $request->input('sec_3_card_2_status');

            if($request->hasfile('sec3_card3_img3'))
            {
            $destination = 'uploads/home_images/'.$data->sec3_card3_img3;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file= $request->file('sec3_card3_img3');
            $extension= $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/home_images/',$filename);
            $data->sec3_card3_img3 =$filename;
            }


            $data->sec3_card3_heading3                         = $request->input('sec3_card3_heading3');
            $data->sec3_card3_paragraph3                       = $request->input('sec3_card3_paragraph3');
            $data->sec_3_card_3_status                        = $request->input('sec_3_card_3_status');

            $data->sec3_right_header_heading                   = $request->input('sec3_right_header_heading');
            $data->sec3_right_header_paragraph                 = $request->input('sec3_right_header_paragraph');

            $data->sec3_title1                                 = $request->input('sec3_title1');
            $data->sec3_delivery_Stime                         = $request->input('sec3_delivery_Stime');
            $data->sec3_delivery_Etime                         = $request->input('sec3_delivery_Etime');
            $data->delivery_status                             =$delivery_status;

            $data->sec3_title2                                  = $request->input('sec3_title2');
            $data->sec3_collection_Stime                        = $request->input('sec3_collection_Stime');
            $data->sec3_collection_Etime                        = $request->input('sec3_collection_Etime');
            $data->collection_status                            =$collection_status;

            $data->sec3_title3                                 = $request->input('sec3_title3');
            $data->sec3_right_service_Stime                    = $request->input('sec3_right_service_Stime');
            $data->sec3_table_service_Etime                    = $request->input('sec3_table_service_Etime');
            $data->table_service_status                        =$table_service_status;

            $data->sec4_header1                                = $request->input('sec4_header1');
            $data->sec4_card1_heading_1                        = $request->input('sec4_card1_heading_1');
            $data->sec4_card1_paragraph_1                      = $request->input('sec4_card1_paragraph_1');
            $data->sec4_card1_heading_2                        = $request->input('sec4_card1_heading_2');

            $data->sec4_card1_day1                             = $request->input('sec4_card1_day1');
            $data->sec4_card1_day1_Stime                       = $request->input('sec4_card1_day1_Stime');
            $data->sec4_card1_day1_Etime                       = $request->input('sec4_card1_day1_Etime');

            $data->sec4_card1_day2                             = $request->input('sec4_card1_day2');
            $data->sec4_card1_day2_Stime                       = $request->input('sec4_card1_day2_Stime');
            $data->sec4_card1_day2_Etime                       = $request->input('sec4_card1_day2_Etime');

            $data->sec4_card1_day3                             = $request->input('sec4_card1_day3');
            $data->sec4_card1_day3_Stime                       = $request->input('sec4_card1_day3_Stime');
            $data->sec4_card1_day3_Etime                       = $request->input('sec4_card1_day3_Etime');

            $data->sec4_card1_day4                             = $request->input('sec4_card1_day4');
            $data->sec4_card1_day4_Stime                       = $request->input('sec4_card1_day4_Stime');
            $data->sec4_card1_day4_Etime                       = $request->input('sec4_card1_day4_Etime');

            $data->sec4_card1_day5                             = $request->input('sec4_card1_day5');
            $data->sec4_card1_day5_Stime                       = $request->input('sec4_card1_day5_Stime');
            $data->sec4_card1_day5_Etime                       = $request->input('sec4_card1_day5_Etime');

            $data->sec4_card1_day6                             = $request->input('sec4_card1_day6');
            $data->sec4_card1_day6_Stime                       = $request->input('sec4_card1_day6_Stime');
            $data->sec4_card1_day6_Etime                       = $request->input('sec4_card1_day6_Etime');

            $data->sec4_card1_day7                             = $request->input('sec4_card1_day7');
            $data->sec4_card1_day7_Stime                       = $request->input('sec4_card1_day7_Stime');
            $data->sec4_card1_day7_Etime                       = $request->input('sec4_card1_day7_Etime');

            $data->sec4_header2                                = $request->input('sec4_header2');
            $data->sec4_card2_heading_1                        = $request->input('sec4_card2_heading_1');
            $data->sec4_card2_paragraph_1                      = $request->input('sec4_card2_paragraph_1');
            $data->sec4_card2_heading_2                        = $request->input('sec4_card2_heading_2');

            $data->sec4_card2_day1                             = $request->input('sec4_card2_day1');
            $data->sec4card2_day1_Stime                        = $request->input('sec4card2_day1_Stime');
            $data->sec4_card2_day1_Etime                       = $request->input('sec4_card2_day1_Etime');

            $data->sec4_card2_day2                             = $request->input('sec4_card2_day2');
            $data->sec4_card2_day2_Stime                       = $request->input('sec4_card2_day2_Stime');
            $data->sec4_card2_day2_Etime                       = $request->input('sec4_card2_day2_Etime');


            $data->sec4_card2_day3                             = $request->input('sec4_card2_day3');
            $data->sec4_card2_day3_Stime                       = $request->input('sec4_card2_day3_Stime');
            $data->sec4_card2_day3_Etime                       = $request->input('sec4_card2_day3_Etime');

            $data->sec4_card2_day4                             = $request->input('sec4_card2_day4');
            $data->sec4_card2_day4_Stime                       = $request->input('sec4_card2_day4_Stime');
            $data->sec4_card2_day4_Etime                       = $request->input('sec4_card2_day4_Etime');

            $data->sec4_card2_day5                             = $request->input('sec4_card2_day5');
            $data->sec4_card2_day5_Stime                       = $request->input('sec4_card2_day5_Stime');
            $data->sec4_card2_day5_Etime                       = $request->input('sec4_card2_day5_Etime');

            $data->sec4_card2_day6                             = $request->input('sec4_card2_day6');
            $data->sec4_card2_day6_Stime                       = $request->input('sec4_card2_day6_Stime');
            $data->sec4_card2_day6_Etime                       = $request->input('sec4_card2_day6_Etime');

            $data->sec4_card2_day7                             = $request->input('sec4_card2_day7');
            $data->sec4_card2_day7_Stime                       = $request->input('sec4_card2_day7_Stime');
            $data->sec4_card2_day7_Etime                       = $request->input('sec4_card2_day7_Etime');


            $data->sec4_header3                                = $request->input('sec_4_header3');
            $data->sec4_card3_heading_1                        = $request->input('sec_4_card3_heading_1');
            $data->sec4_card3_paragraph_1                      = $request->input('sec4_card3_paragraph_1');
            $data->sec4_card3_heading_2                        = $request->input('sec4_card3_heading_2');

            $data->sec4_card3_day1                             = $request->input('sec4_card3_day1');
            $data->sec4_card3_day1_Stime                       = $request->input('sec4_card3_day1_Stime');
            $data->sec4_card3_day1_Etime                       = $request->input('sec4_card3_day1_Etime');

            $data->sec4_card3_day2                             = $request->input('sec4_card3_day2');
            $data->sec4_card3_day2_Stime                       = $request->input('sec4_card3_day2_Stime');
            $data->sec4_card3_day2_Etime                       = $request->input('sec4_card3_day2_Etime');

            $data->sec4_card3_day3                             = $request->input('sec4_card3_day3');
            $data->sec4_card3_day3_Stime                       = $request->input('sec4_card3_day3_Stime');
            $data->sec4_card3_day3_Etime                       = $request->input('sec4_card3_day3_Etime');

            $data->sec4_card3_day4                             = $request->input('sec4_card3_day4');
            $data->sec4_card3_day4_Stime                       = $request->input('sec4_card3_day4_Stime');
            $data->sec4_card3_day4_Etime                       = $request->input('sec4_card3_day4_Etime');

            $data->sec4_card3_day5                             = $request->input('sec4_card3_day5');
            $data->sec4_card3_day5_Stime                       = $request->input('sec4_card3_day5_Stime');
            $data->sec4_card3_day5_Etime                       = $request->input('sec4_card3_day5_Etime');

            $data->sec4_card3_day6                             = $request->input('sec4_card3_day6');
            $data->sec4_card3_day6_Stime                       = $request->input('sec4_card3_day6_Stime');
            $data->sec4_card3_day6_Etime                       = $request->input('sec4_card3_day6_Etime');

            $data->sec4_card3_day7                             = $request->input('sec4_card3_day7');
            $data->sec4_card3_day7_Stime                       = $request->input('sec4_card3_day7_Stime');
            $data->sec4_card3_day7_Etime                       = $request->input('sec4_card3_day7_Etime');

            $data->status_1                                    = $request->status_1;
            $data->status_2                                    = $request->status_2;
            $data->status_3                                    = $request->status_3;

            $data->status_card1_day1                           =$request->status_card1_day1;
            $data->status_card1_day2                           =$request->status_card1_day2;
            $data->status_card1_day3                           =$request->status_card1_day3;
            $data->status_card1_day4                           =$request->status_card1_day4;
            $data->status_card1_day5                           =$request->status_card1_day5;
            $data->status_card1_day6                           =$request->status_card1_day6;
            $data->status_card1_day7                           =$request->status_card1_day7;

            $data->status_card2_day1                           =$request->status_card2_day1;
            $data->status_card2_day2                           =$request->status_card2_day2;
            $data->status_card2_day3                           =$request->status_card2_day3;
            $data->status_card2_day4                           =$request->status_card2_day4;
            $data->status_card2_day5                           =$request->status_card2_day5;
            $data->status_card2_day6                           =$request->status_card2_day6;
            $data->status_card2_day7                           =$request->status_card2_day7;

            $data->status_card3_day1                           =$request->status_card3_day1;
            $data->status_card3_day2                           =$request->status_card3_day2;
            $data->status_card3_day3                           =$request->status_card3_day3;
            $data->status_card3_day4                           =$request->status_card3_day4;
            $data->status_card3_day5                           =$request->status_card3_day5;
            $data->status_card3_day6                           =$request->status_card3_day6;
            $data->status_card3_day7                           =$request->status_card3_day7;

            $data->update();
            return back()->with('success' , 'updated');
     }

     public function update2(Request $request){
        // dd($request);
        $helpdata= help::where('id',$request->id)->first();

        $helpdata->sec1_heading              =$request->input('sec1_heading');
        $helpdata->sec1_paragraph            =$request->input('sec1_paragraph');

        $helpdata->sec2_heading              =$request->input('sec2_heading');
        $helpdata->sec2_paragraph            =$request->input('sec2_paragraph');

        $helpdata->sec3_heading               =$request->input('sec3_heading');
        $helpdata->sec3_paragraph             =$request->input('sec3_paragraph');
        $helpdata->sec3_artical_list          =$request->input('sec3_artical_list');

        $helpdata->update();
        return back()->with('success' , 'updated');
    }
                                     // FUNCTION FOR ADD HELP CARDS

    public function add_card(Request $request){
            // dd($request);
            if ($request->hasfile('image')) {

                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/home_images/', $filename);
            }

        HelpCard::create([

            'icon'              =>$request->icon,
            'heading'           =>$request->heading,
            'paragraph'         =>$request->paragraph,
            'info_heading'      =>$request->info_heading,
            'info_paragraph '   =>$request->info_paragraph,
            'heading_1'         =>$request->heading_1,
            'paragraph_1'       =>$request->paragraph_1,
            'heading_2'         =>$request->heading_2,
            'paragraph_2'       =>$request->paragraph_2,

        ]);
        return back();

    }
                                     // FUNCTION FOR HELP CARDS INFO

    public function card_info(Request $request,$id){

        $data = HelpCard::first();
        $info=HelpCard::where('id',$request->id)->first();
        return view('backend.layout.website.card_info',compact('data','info'));
    }

    public function edit($id){
        $data=HelpCard::find($id);
        // dd($data);
        return view('backend.layout.website.edit_help_card',compact('data'));
    }


    public function update_card(Request $request){

        if ($request->hasfile('image')) {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/home_images/', $filename);
        }
        // dd($request);
        $update = HelpCard::where('id',$request->id)->first();

        $update->icon            =$request->input('icon');
        $update->heading         =$request->input('heading');
        $update->paragraph       =$request->input('paragraph');
        $update->info_heading      =$request->input('info_heading');
        $update->info_paragraph       =$request->input('info_paragraph');
        $update->heading_1      =$request->input('heading_1');
        $update->paragraph_1       =$request->input('paragraph_1');
        $update->heading_2      =$request->input('heading_2');
        $update->paragraph_2      =$request->input('paragraph_2');

        $update->update();
        return back()->with('success' , 'updated');

    }

    public function delete($id){
        HelpCard::where('id',$id)->delete();
        return back();
    }

    public function index()
    {
        $users = User::get();
        return view('users',compact('users'));
    }


    public function changeUserStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();

        return response()->json(['success'=>'User status change successfully.']);
    }

                                        // FUNCTION FOR ADD CATEGORIES

    public function add_categories(Request $request){
        // dd("haha");

        $imageName="";
        if ($request->photos)
        {
            $imageName = time().'.'.$request->photos->extension();
            $img =  $request->photos->move('uploads/home_images/', $imageName);
        }

        if($request->photos){
            $image = $imageName;
         }
         else{
             $image = $request->img;
         }


         if($request->delivery){
             $delivery = 1;
         }
         else{
             $delivery = 0;
         }

         if($request->collection){
            $collection = 1;
        }
        else{
            $collection = 0;
        }

        if($request->table_service){
            $table_service = 1;
        }
        else{
            $table_service = 0;
        }

        Category::create([
        'category_name'      =>$request->category_name,
        'status'             =>$request->status,
        'keywords'           =>$request->keywords,
        'delivery'           =>$delivery,
        'collection'         =>$collection,
        'table_service'      =>$table_service,
        'description'        =>$request->description,
        'photos'             =>$imageName,
        ]);
        return back();
    }

    public function edit_category($id){

        if( 
            auth()->user()->role == "super" || 
            auth()->user()->role == "admin" ||
            auth()->user()->role == "manager"
            )
        {
        $category=Category::find($id);
        return view('backend.layout.website.edit_category',compact('category'));
        }
        abort(404);

    }

    public function update_category(Request $request){
        $data = Category::where('id',$request->id)->first();

        $data->category_name             =$request->input('category_name');
        $data->status                    =$request->input('status');
        $data->keywords                  =$request->input('keywords');


        if($request->input('collection'))
        {
            $collection = 1;
        }
        else{
            $collection = 0;
        }

        if($request->input('table_service'))
        {
            $table_service = 1;
        }
        else{
            $table_service = 0;
        }

        if($request->input('delivery'))
        {
            $delivery = 1;
        }
        else{
            $delivery = 0;
        }

        $data->delivery                  =$delivery;
        $data->collection                =$collection;
        $data->table_service             =$table_service;
        $data->description               =$request->input('description');
        $data->photos                    =$request->input('photos');

        $data->update();
        return redirect()->route('category')->with('success' , 'updated');

    }

    public function delete_category($id){
        if( 
            auth()->user()->role == "super" || 
            auth()->user()->role == "admin" ||
            auth()->user()->role == "manager"
            )
        {
        Category::where('id',$id)->delete();
        return back();
        }
    }

    // FUNCTIONS FOR ADD ITEMS

    public function add_item(Request $request){
        // dd($request);
        $imageName2="";
        if ($request->photo)
        {
            $imageName2= time().'.'.$request->photo->extension();
            $img =  $request->photo->move('uploads/home_images/', $imageName2);
        }

        if($request->photo){
            $image = $imageName2;
         }
         else{
             $image = $request->img;
         }

         if($request->delivery){
            $delivery = 1;
        }
        else{
            $delivery = 0;
        }
        if($request->collection){
            $collection = 1;
        }
        else{
            $collection = 0;
        }

        if($request->table_service){
            $table_service = 1;
        }
        else{
            $table_service = 0;
        }

        // dd($request);
        $items_saved = Item::create([

            'category'                   =>$request->category,
            'availability'               =>$request->availability,
            'preparation_time'           =>$request->preparation_time,
            'delivery'                   =>$delivery,
            'collection'                 =>$collection,
            'table_service'              =>$table_service,
            'photo'                      =>$imageName2,
            'name'                       =>$request->name,
            'price'                      =>$request->item_price,
            'description'                =>$request->description,
            'minimum'                    =>$request->minimum,
            'maximum'                    =>$request->maximum,

        ]);
        $item_id = $items_saved->id;
        
        foreach($request->itemprice as $key=> $item){
            
            $item_options_saved = Item_Option::create([
                'item_id'      => $item_id,
                'item_price'   =>$item,
                'item_size'    =>$request->itemsize[$key],
                
            ]);
        }
        
        
        
        foreach($request->price as $key=> $max){
            
            $ingredients_save = Ingredients::create([
                'item_id'   => $item_id,
                'price'       =>$max,
                'quantity'    =>$request->quantity[$key],
                
            ]);
            // dd($request->all());
         }

        return back();
    }

    public function update_user(Request $request){
        // dd($request);
        $user= User::where('id', auth()->user()->id)->first();


        if($request->hasfile('photo'))
            {
            $destination = 'uploads/home_images/'.$user->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file= $request->file('photo');
            $extension= $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/home_images/',$filename);
            $user->photo =$filename;
            }

        $user->name                     =$request->input('name');
        $user->last_name                =$request->input('last_name');
        $user->telephone                =$request->input('telephone');
        $user->email                    =$request->input('email');
        $user->Personal_info            =$request->input('Personal_info');

        $user->update();
        return back()->with('success' , 'updated');
    }

    public function update_password(Request $request){

        $data = request()->validate([

            'old_password'         =>'required',
            'password'             =>'required|confirmed',
            'confirm_password'     =>'required',
        ]);
        // dd($request);
        // dd(Auth::user()->id);
        //  $user=User::all();

        $hashedPassword = Auth::user()->password;

        if (\Hash::check($request->old_password , $hashedPassword )) {

            if (!\Hash::check($request->new_password , $hashedPassword)) {

                $user =User::find(Auth::user()->id);
                //  dd($user);
                 $user->password = bcrypt($request->new_password);
                 User::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $user->password));

                 $request->session()->flash('status','password updated successfully');
                 return redirect()->back();

               }

               else{
                $request->session()->flash('status','new password can not be the old password!');
                return redirect()->back();
               }

              }

    }


    public function email_settings(Request $request, user $user){

        $request->validate([

            'oldemail' =>'required',
            'email' =>'required|confirmed',
            'confirm_new_email' =>'required',
        ]);

        $user = Auth::user();
        // dd($user->email);
        $user->email = $request->confirm_new_email;
        $user->update();

        return redirect()->back()->with('success', 'email updated successfully');

    }

    // CCRUD FUNCTIONS FOR MENU-ITEMS

    public function edit_menu($id){
         // dd($display);
         
        if(
            auth()->user()->role == "super" ||
            auth()->user()->role == "admin" ||
            auth()->user()->role == "manager" 
        ){
            $data=Item::find($id);
            $category = Category::all();
            $display = Item::find($id);
            $items_o = Item_Option::where('item_id' , $id)->get();
            $ing =  Ingredients::where('item_id',$id)->get();
            return view('backend.layout.edit_menu',compact('category','display','items_o','ing'));
        }
        abort(404);
    }

    public function update_menu(Request $request){

        $menu = Item::where('id',$request->id)->first();

        $menu->name                 =$request->input('name');
        $menu->category             =$request->input('category');
        $menu->price                =$request->input('item_price');
        $menu->availability         =$request->input('availability');
        $menu->preparation_time     =$request->input('preparation_time');
        $menu->delivery             =$request->input('delivery');
        $menu->collection           =$request->input('collection');
        $menu->table_service        =$request->input('table_service');
        
        
            if($request->hasfile('Photo'))
            {
            $destination = 'uploads/home_images/'.$menu->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file= $request->file('Photo');
            $extension= $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/home_images/',$filename);
            $menu->photo =$filename;
            }
        
        $menu->description          =$request->input('description');
        $menu->minimum              =$request->input('minimum');
        $menu->maximum              =$request->input('table_service');

        $menu->update();
        
        $item_id = $request->id;
        
        $item_op = Item_Option::where('item_id' , $item_id)->get();
        foreach($item_op as $op)
        {
            $op->delete();
        }
        if($request->itemprice != null)
        {
        foreach($request->itemprice as $key=> $item){
            
            $item_options_saved = Item_Option::create([
                'item_id'      => $item_id,
                'item_price'   =>$item,
                'item_size'    =>$request->itemsize[$key],
                
            ]);
        }
        }
        
        
        $item_op = Ingredients::where('item_id' , $item_id)->get();
        foreach($item_op as $op)
        {
            $op->delete();
        }
         if($request->price != null)
        {
          foreach($request->price as $key=> $max){
            
            $ingredients_save = Ingredients::create([
                'item_id'   => $item_id,
                'price'       =>$max,
                'quantity'    =>$request->quantity[$key],
                
            ]);
            
          }
        }
        
        
        
        return redirect()->route('menu_management')->with('success' , 'updated');

    }

    public function delete_menu($id){
        Item_Option::where('item_id',$id)->delete();
        Ingredients::where('item_id',$id)->delete();
        Item::where('id',$id)->delete();
        return back();
    }


    // function for add new admin

    public function add_admin(Request $request){
        // dd($request);


        
        $request->validate([

            'name' =>'required',
            'email' =>'required',
            'password' =>'required',
            'role' =>'required'
        ]);


        if($request->delivery){
            $delivery = 1;
        }
        else{
            $delivery = 0;
        }

        if($request->collection){
            $collection = 1;
        }
        else{
            $collection = 0;
        }

        if($request->table_service){
            $table_service = 1;
        }
        else{
            $table_service = 0;
        }

        $user = User::create([

            'name'           =>$request->name,
            'last_name'      =>$request->last_name,
            'email'          =>$request->email,
            'phone_no'       =>$request->phone_no,
            'status'         =>$request->status,
            'permission'     =>$request->permission,
            'delivery'       =>$delivery,
            'collection'     =>$collection,
            'table_service'  =>$table_service,
            'password'       => bcrypt($request->password),
            'role'           =>$request->role,

        ]);

        // auth()->login($user);

        return redirect('admin_backend');
    }

    public function update_admin(Request $request){
        $admin = User::where('id',$request->id)->first();
        // dd($user->email);
        $admin->name                 =$request->name;
        $admin->last_name            =$request->last_name;
        $admin->email                =$request->email;
        $admin->status               =$request->status;
        $admin->permission           =$request->permission;

        $admin->update();

        return redirect('admin_backend')->with('success', 'updated successfully');
                return back();
    }

    public function delete_admin($id){
        User::where('id',$id)->delete();
        return back();
    }

    // function for update payment marchant

    public function update_payment(Request $request){

        
            $payment_id = $request->pay_id;
        $payment = Payment::where('id',1)->first();
        if($payment){
            $payment->delivery_Online_Payment       =$request->input('delivery_Online_Payment');
            $payment->delivery_COD                  =$request->input('delivery_COD');
            $payment->table_service_online_payment  =$request->input('table_service_online_payment');
            $payment->table_service_COD             =$request->input('table_service_COD');
            $payment->collection_online_payment     =$request->input('collection_online_payment');
            $payment->collection_COD                =$request->input('collection_COD');
            $payment->default_currency              =$request->input('default_currency');
            $payment->Stripe_api_Key                =$request->input('Stripe_api_Key');
            $payment->secret_key                    =$request->input('secret_key');
    $key='STRIPE_KEY';
            $value=$request->input('Stripe_api_Key');
            file_put_contents(app()->environmentFilePath(),str_replace(
                
                $key. "=" .env($key),
                $key. "=" .$value,
                file_get_contents(app()->environmentFilePath())
                
                ));
                $key='STRIPE_SECRET';
            $value=$request->input('secret_key');
            file_put_contents(app()->environmentFilePath(),str_replace(
                
                $key. "=" .env($key),
                $key. "=" .$value,
                file_get_contents(app()->environmentFilePath())
                
                ));
            
    
                
            $payment->update();
            
            return back()->with('success' , 'updated');
        }else{
            $payment = new Payment();
            $payment->delivery_Online_Payment                         =$request->input('delivery_Online_Payment','');
            $payment->delivery_COD                                    =$request->input('delivery_COD');
            $payment->table_service_online_payment                    =$request->input('table_service_online_payment');
            $payment->table_service_COD                               =$request->input('table_service_COD');
            $payment->collection_online_payment                       =$request->input('collection_online_payment');
            $payment->collection_COD                                  =$request->input('collection_COD');
            $payment->default_currency                                =$request->input('default_currency');
            $payment->Stripe_api_Key                                  =$request->input('Stripe_api_Key');
            $payment->secret_key                                      =$request->input('secret_key');

            $payment->save();
            $key='STRIPE_KEY';
            $value=$request->input('Stripe_api_Key');
            file_put_contents(app()->environmentFilePath(),str_replace(
                
                $key. "=" .env($key),
                $key. "=" .$value,
                file_get_contents(app()->environmentFilePath())
                
                ));
                $key='STRIPE_SECRET';
            $value=$request->input('secret_key');
            file_put_contents(app()->environmentFilePath(),str_replace(
                
                $key. "=" .env($key),
                $key. "=" .$value,
                file_get_contents(app()->environmentFilePath())
                
                ));
            return back();
        }
    }

    public function update_email_settings(Request $request){
        // dd($request);
        $request->validate([

            'user_name'         =>'required',
            'password'          =>'required',
            'server_address'    =>'required',
            'port_no'           =>'required',
            'server'            =>'required',

        ]);

        $email = Email::where('id',$request->id)->first();

        $email->user_name                        =$request->input('user_name');
        $email->password                         =$request->input('password');
        $email->server_address                   =$request->input('server_address');
        $email->port_no                          =$request->input('port_no');
        $email->server                           =$request->input('server');

        $email->update();

        return back()->with('success' , 'updated');
    }



    public function user_management()
    {

        $user = User::first();
        return view('backend.layout.user_management',compact('user'));

    }



    public function add_user(Request $req)
    {

        $req->validate([

            'name' =>'required',
            'email' =>'required',
            'password' =>'required',
            'role' =>'required'
        ]);


        $add_user=new User();
        $add_user->name=$req->name;
        $add_user->email=$req->email;
        $add_user->password=Hash::make($req->password);
        $add_user->role=$req->role;
        $add_user->status=$req->status;
        $add_user->save();
        return back();



    }



}


