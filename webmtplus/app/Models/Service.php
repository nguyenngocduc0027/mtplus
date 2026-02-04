<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title_vi',
        'title_en',
        'slug',
        'short_description_vi',
        'short_description_en',
        'content_vi',
        'content_en',
        'icon_path',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    // Use slug for route model binding
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Helper methods
    public function getTitle()
    {
        return app()->getLocale() == 'en' ? $this->title_en : $this->title_vi;
    }

    public function getShortDescription()
    {
        return app()->getLocale() == 'en' ? $this->short_description_en : $this->short_description_vi;
    }

    public function getContent()
    {
        return app()->getLocale() == 'en' ? $this->content_en : $this->content_vi;
    }

    // Generate slug from title_vi
    public static function boot()
    {
        parent::boot();

        static::creating(function ($service) {
            if (empty($service->slug)) {
                $service->slug = \Str::slug($service->title_vi);
            }
        });

        static::updating(function ($service) {
            if ($service->isDirty('title_vi') && empty($service->slug)) {
                $service->slug = \Str::slug($service->title_vi);
            }
        });
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}
