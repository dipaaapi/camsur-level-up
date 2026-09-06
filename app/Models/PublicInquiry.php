<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicInquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_context',
        'subject_title',
        'feedback_type',
        'category',
        'sender_name',
        'location_sector',
        'message',
        'attachment_path',
        'attachment_name',
        'status',
        'admin_notes',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
