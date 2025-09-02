<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order_items extends Model
{
    protected $fillable = ['id', 'order_id', 'product_id', 'quantity', 'price', 'subtotal', 'created_at', 'updated_at'];
}
