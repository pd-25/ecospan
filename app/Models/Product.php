<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'category_name',
        'menu_position',
        'image',
        'micronutrient',
        'major_ingredients',
        'role_and_function',
        'use_recommendation',
        'available_pack',
        'description',
        'status',
    ];
}
