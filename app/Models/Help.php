<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    use HasFactory;
    protected $fillable = [

        'sec1_heading',
        'sec1_paragraph',

        'sec2_heading',
        'sec2_paragraph',

        'sec3_heading',
        'sec3_paragraph',
        'sec3_artical_list',
    ];
}
