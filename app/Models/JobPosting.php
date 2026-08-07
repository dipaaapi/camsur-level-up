<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

class JobPosting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'department_or_company', 'type', 'location', 
        'employment_type', 'csc_eligibility_required', 'description', 
        'requirements', 'application_link_or_email', 'image', 
        'gallery_images', 'posted_at', 'deadline'
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'csc_eligibility_required' => 'boolean',
        'posted_at' => 'datetime',
        'deadline' => 'datetime',
    ];

    /**
     * Scope for active postings based on dates.
     * Active means: posted_at <= NOW AND (deadline IS NULL OR deadline >= NOW)
     */
    public function scopeActive(Builder $query): Builder
    {
        $now = Carbon::now();

        return $query->where('posted_at', '<=', $now)
                     ->where(function ($q) use ($now) {
                         $q->whereNull('deadline')
                           ->orWhere('deadline', '>=', $now);
                     });
    }

    /**
     * Scope for filtering specific job types.
     */
    public function scopeOfType(Builder $query, string|array $type): Builder
    {
        if (is_array($type)) {
            return $query->whereIn('type', $type);
        }
        return $query->where('type', $type);
    }
}