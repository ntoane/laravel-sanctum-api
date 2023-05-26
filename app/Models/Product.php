<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Add fillable fields
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price'
    ];
}
