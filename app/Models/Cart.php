<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_img',
        'product_name',
        'product_price',
        'product_id',
        'user_id',
        'ordered_qty',
        'product_total',
        'sub_total',
        'grand_total',
    ];
}
