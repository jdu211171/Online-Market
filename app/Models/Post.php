<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'category_id'
    ];

    public function postCategory()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }
}
