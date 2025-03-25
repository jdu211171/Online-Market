<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVolume extends Model
{
    protected $table = 'product_volumes';
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class, 'volume_id', 'id');
    }
}
