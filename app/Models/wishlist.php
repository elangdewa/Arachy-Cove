<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    protected $fillable = ['id', 'user_id', 'product_id', 'created_at', 'updated_at'];
}
