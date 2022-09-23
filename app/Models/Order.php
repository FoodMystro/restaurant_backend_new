<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'unique_code',
        'type',
        'status',
        'grand_total',
        'sub_total',
        'created_at',
        'updated_at'
    ];
    public function order_detail(){
        return $this->hasMany(OrderDetail::class, 'order_id','id');
    }
    
    public function ordered_user(){
        return $this->hasOne(OrderedUserDetail::class);
    }
    
    public static function saveOrder($request){
        $unique = uniqid('order');
        $order = parent::create([
            'unique_code'   => $unique,
            'type'          => $request->type,
            'status'        => 'Pending',
            'sub_total'     => $request->sub_total,
            'grand_total'   => $request->grand_total,
        ]);
        return [
            'order_id' => $order->id,
            'status'  => 200,
            'message' => "Order Created Successfully!",
        ];
}
}
