<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'sale_price',
        'category_id',
        'volume_id',
        'stock_quantity'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function volume()
    {
        return $this->belongsTo(ProductVolume::class, 'volume_id', 'id');
    }

    /**
     * Get all images for the product.
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}

