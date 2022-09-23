<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item_Option extends Model
{
    use HasFactory;
    protected $table = 'item__options';
    protected $fillable = [
        'item_id',
        'item_price',
        'item_size',
    ];
}
