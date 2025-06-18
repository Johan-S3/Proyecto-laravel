<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Get the parent commentable model (post or video).
     */ 
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
