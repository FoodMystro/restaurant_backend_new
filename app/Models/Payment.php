<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'delivery_Online_Payment',
        'delivery_COD',
        'table_service_online_payment',
        'table_service_COD',
        'collection_online_payment',
        'collection_COD',
        'default_currency',
        'Stripe_api_Key',
        'secret_key',

    ];
}
