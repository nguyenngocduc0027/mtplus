<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title_vi',
        'title_en',
        'slug',
        'project_number',
        'status',
        'project_type_vi',
        'project_type_en',
        'commencement_date',
        'completion_date',
        'short_description_vi',
        'short_description_en',
        'description_vi',
        'description_en',
        'main_image',
        'gallery_images',
        'features_vi',
        'features_en',
        'location_vi',
        'location_en',
        'client_name',
        'budget',
        'area',
        'order',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'commencement_date' => 'date',
        'completion_date' => 'date',
        'gallery_images' => 'array',
        'features_vi' => 'array',
        'features_en' => 'array',
        'budget' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('created_at', 'desc');
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeInProgress($query)
    {
        return $query->where('status', 'in_progress');
    }

    // Accessors
    public function getTitleAttribute()
    {
        $locale = app()->getLocale();
        return $this->{"title_$locale"} ?? $this->title_vi;
    }

    public function getProjectTypeAttribute()
    {
        $locale = app()->getLocale();
        return $this->{"project_type_$locale"} ?? $this->project_type_vi;
    }

    public function getShortDescriptionAttribute()
    {
        $locale = app()->getLocale();
        return $this->{"short_description_$locale"} ?? $this->short_description_vi;
    }

    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        return $this->{"description_$locale"} ?? $this->description_vi;
    }

    public function getFeaturesAttribute()
    {
        $locale = app()->getLocale();
        return $this->{"features_$locale"} ?? $this->features_vi ?? [];
    }

    public function getLocationAttribute()
    {
        $locale = app()->getLocale();
        return $this->{"location_$locale"} ?? $this->location_vi;
    }

    public function getStatusLabelAttribute()
    {
        return match($this->status) {
            'completed' => __('Completed'),
            'in_progress' => __('In Progress'),
            default => $this->status,
        };
    }
}
