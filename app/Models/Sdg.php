<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sdg extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'code',
        'name',
        'un_meaning',
        'camsur_commitment',
        'key_targets',
        'color_hex',
    ];

    protected $casts = [
        'key_targets' => 'array',
    ];
}