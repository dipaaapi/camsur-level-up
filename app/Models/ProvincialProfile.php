<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProvincialProfile extends Model
{
    protected $fillable = [
        'section_key',
        'title',
        'subtitle',
        'content',
        'quick_facts',
        'image_path',
        'sort_order',
    ];

    protected $casts = [
        'quick_facts' => 'array',
    ];
}