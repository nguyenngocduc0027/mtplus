<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_vi',
        'title_en',
        'slug',
        'location_vi',
        'location_en',
        'job_type',
        'experience_required',
        'salary_display',
        'salary_min',
        'salary_max',
        'salary_currency',
        'salary_period',
        'image',
        'description_vi',
        'description_en',
        'responsibilities_vi',
        'responsibilities_en',
        'qualifications_vi',
        'qualifications_en',
        'benefits_vi',
        'benefits_en',
        'application_deadline',
        'application_email',
        'application_url',
        'positions_available',
        'department_vi',
        'department_en',
        'order',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'responsibilities_vi' => 'array',
        'responsibilities_en' => 'array',
        'qualifications_vi' => 'array',
        'qualifications_en' => 'array',
        'benefits_vi' => 'array',
        'benefits_en' => 'array',
        'application_deadline' => 'date',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'salary_min' => 'decimal:2',
        'salary_max' => 'decimal:2',
    ];

    // Accessors for multi-language support
    public function getTitleAttribute()
    {
        return app()->getLocale() === 'vi' ? $this->title_vi : $this->title_en;
    }

    public function getLocationAttribute()
    {
        return app()->getLocale() === 'vi' ? $this->location_vi : $this->location_en;
    }

    public function getDescriptionAttribute()
    {
        return app()->getLocale() === 'vi' ? $this->description_vi : $this->description_en;
    }

    public function getResponsibilitiesAttribute()
    {
        return app()->getLocale() === 'vi' ? $this->responsibilities_vi : $this->responsibilities_en;
    }

    public function getQualificationsAttribute()
    {
        return app()->getLocale() === 'vi' ? $this->qualifications_vi : $this->qualifications_en;
    }

    public function getBenefitsAttribute()
    {
        return app()->getLocale() === 'vi' ? $this->benefits_vi : $this->benefits_en;
    }

    public function getDepartmentAttribute()
    {
        return app()->getLocale() === 'vi' ? $this->department_vi : $this->department_en;
    }

    // Scope for active careers
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope for featured careers
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // Scope for ordering
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('created_at', 'desc');
    }

    // Scope for job type filter
    public function scopeByJobType($query, $type)
    {
        return $query->where('job_type', $type);
    }

    // Scope for open positions (deadline not passed)
    public function scopeOpen($query)
    {
        return $query->where(function ($q) {
            $q->whereNull('application_deadline')
              ->orWhere('application_deadline', '>=', now());
        });
    }

    // Get job type label
    public function getJobTypeLabelAttribute()
    {
        $labels = [
            'full-time' => app()->getLocale() === 'vi' ? 'Toàn thời gian' : 'Full-time',
            'part-time' => app()->getLocale() === 'vi' ? 'Bán thời gian' : 'Part-time',
            'contract' => app()->getLocale() === 'vi' ? 'Hợp đồng' : 'Contract',
            'internship' => app()->getLocale() === 'vi' ? 'Thực tập' : 'Internship',
        ];

        return $labels[$this->job_type] ?? $this->job_type;
    }

    // Check if application is still open
    public function getIsOpenAttribute()
    {
        if (!$this->application_deadline) {
            return true;
        }
        return $this->application_deadline >= now();
    }
}
