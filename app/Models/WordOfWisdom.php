<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordOfWisdom extends Model
{
    use HasFactory;

    protected $table = 'words_of_wisdom';

    protected $fillable = [
        'category_type',
        'quote',
        'author_or_source',
    ];
}
