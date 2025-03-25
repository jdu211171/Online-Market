<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'original_filename',
        'mime_type',
        'size',
        'imageable_id',
        'imageable_type',
    ];

    /**
     * Get the parent imageable model (product, user, etc).
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
