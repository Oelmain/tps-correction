<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', // Add 'name' to the fillable attributes
        'detail', // Assuming 'detail' is already in the fillable attributes
    ];
}
