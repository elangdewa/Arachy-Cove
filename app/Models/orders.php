<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillable = ['id', 'user_id', 'guest_name', 'guest_email', 'guest_phone', 'guest_address', 'total_price', 'status', 'payment_status', 'payment_method'];
}
