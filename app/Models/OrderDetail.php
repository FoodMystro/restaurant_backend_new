<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'item_id',
        'price',
        'qty',
        'sub_total',
        'created_at',
        'updated_at'
    ];
    
    public function order(){
        return $this->belongsTo(Order::class,'order_id','id');
    }
    
    public function items(){
        return $this->belongsTo(Item::class,'item_id','id');
    }
    public static function saveOrderDetails($request, $order_id){
        foreach ($request->item_id as  $key => $item )
        {
            parent::create([
                'order_id'      => $order_id,
                'item_id'       => $item,
                'price'         => $request->price[$key],
                'qty'           => $request->qty[$key],
                'item_sub_total'     => $request->sub_total[$key],
            ]);
        }
            return [
                'status'  => 200,
                'message' => "Added Successfully!",
            ];
    }
}
