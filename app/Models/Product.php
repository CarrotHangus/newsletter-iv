<?php

namespace App\Models;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'name',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'quantity',
        'status',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function productImages(){
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}
