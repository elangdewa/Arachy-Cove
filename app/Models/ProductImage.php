<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductImage extends Model
{
    protected $fillable = ['product_id', 'image'];
    protected $appends = ['image_url'];
public function getImageUrlAttribute()
    {
        return Storage::url($this->image);
    }
    public function product()
{
    return $this->belongsTo(Product::class, 'product_id');
}
}
