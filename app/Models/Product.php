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
        'category_id',
        'image_id'
    ];

    public function category()
    {
        return $this->belongsTo("Category");
    }

    public function image(): HasOne
    {
        return $this->hasOne("Image", "id", "image_id");
    }
}
