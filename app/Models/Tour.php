<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'title_input',
        'slug',
        'img',
        'deycount',
        'start_data',
        'top_description',
        'program',
        'in_price',
        'out_price',
        'galery',
        'prices'
    ];

    public $casts = [
        'galery' => 'array',
        'prices' => 'array',
    ];
}
