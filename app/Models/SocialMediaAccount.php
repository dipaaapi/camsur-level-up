<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMediaAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'platform',
        'office_name',
        'handle',
        'url',
        'description',
        'followers_count',
        'badge_category',
        'avatar_url',
        'color_hex',
        'is_verified',
        'is_featured',
        'sort_order',
    ];
}