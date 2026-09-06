<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoricalEra extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'period',
        'context',
        'notes',
        'key_characteristics',
    ];

    protected $casts = [
        'key_characteristics' => 'array',
    ];
}