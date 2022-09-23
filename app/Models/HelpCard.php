<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpCard extends Model
{
    use HasFactory;
    protected $fillable = [
        'icon',
        'heading',
        'paragraph',
        'info_heading',
        'info_paragraph',
        'heading_1',
        'paragraph_1',
        'heading_2',
        'paragraph_2',
        'image',
    ];
}
