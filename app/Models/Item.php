<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
  
    protected $fillable = [

        'category',
        'availability',
        'preparation_time',
        'delivery',
        'collection',
        'table_service',
        'photo',
        'name',
        'price',
        'description',
        'minimum',
        'maximum',
    ];
    public function size(){
        return $this->hasMany(Item_Option::class);
    }
    public function ingredient(){
        return $this->hasMany(Ingredients::class);
    }
    
    public function orde_details(){
        return $this->hasMany(OrderDetail::class);
    }
}
