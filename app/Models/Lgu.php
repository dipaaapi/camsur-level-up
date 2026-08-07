<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lgu extends Model
{
    use HasFactory;

    protected $fillable = [
        'lgu_id',
        'name',
        'district',
        'class',
        'area',
        'pop',
        'map_url',
        'seal',
        'evac_centers',
    ];
}
