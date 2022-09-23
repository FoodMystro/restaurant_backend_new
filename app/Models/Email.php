<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    protected $filllable = [
        'user_name',
        'password',
        'server_address',
        'port_no',
        'server',
    ];
}
