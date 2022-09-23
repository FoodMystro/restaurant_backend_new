<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedUserDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'name',
        'email',
        'phone',
        'address',
        'city',
        'postcode',
        'created_at',
        'updated_at'
    ];

    public function order(){
        return $this->belongsTo(Order::class,'order_id','id');
    }
    public static function saveOrderOrderedUserDetail($request, $order_id){
        
            parent::create([
                'order_id' => $order_id,
                'name'      => $request->name,
                'email'     => $request->email,
                'phone'     => $request->phone,
                'address'   => $request->address,
                'city'      => $request->city,
                'postcode'  => $request->postcode,
            ]);
            return [
                'status'  => 200,
                'message' => "Added Successfully!",
            ];
    }
}
