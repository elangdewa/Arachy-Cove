<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillable = ['id', 'order_code','guest_access_key',
    'user_id', 'guest_name', 'guest_email', 'guest_phone', 'guest_address', 'total_price',
    'status', 'payment_status', 'payment_method','tracking_carrier','tracking_number','shipped_at','delivered_at',];
     protected $casts = [
        'shipped_at' => 'datetime',
        'delivered_at' => 'datetime',
    ];
}

