<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable =[
        'category_name',
        'status',
        'keywords',
        'delivery',
        'collection',
        'table_service',
        'description',
        'photos',
    ];
}
