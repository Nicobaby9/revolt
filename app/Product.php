<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category',
        'product_name',
        'product_detail',
        'product_photo'
    ];
}
