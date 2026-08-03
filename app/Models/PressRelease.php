<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PressRelease extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'author',
        'category',
        'sdgs',
        'image',
        'is_featured',
        'published_at',
    ];

    protected $casts = [
        'sdgs' => 'array',
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
    ];
}