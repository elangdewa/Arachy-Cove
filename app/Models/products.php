<?php

namespace App\Models;
use App\Models\ProductImage;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class products extends Model
{
        use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'stock_1',
        'stock_2',
        'stock_3',
        'category_id',
        'images',
    ];
    public function images()
{
    return $this->hasMany(ProductImage::class, 'product_id');

}
public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
class Product extends Model
{
    use HasFactory, SoftDeletes;
}
