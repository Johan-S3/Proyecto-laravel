<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

// use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'stock',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo("Category");
    }

    /**
     * Get all of the post's comments.
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
