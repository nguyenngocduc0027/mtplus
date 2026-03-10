<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'position_vi',
        'position_en',
        'detailed_position_vi',
        'detailed_position_en',
        'photo',
        'bio_vi',
        'bio_en',
        'detailed_bio_vi',
        'detailed_bio_en',
        'experience_years',
        'location_vi',
        'location_en',
        'field_of_activity_vi',
        'field_of_activity_en',
        'address',
        'phone',
        'email',
        'fax',
        'specialties_vi',
        'specialties_en',
        'experience_list_vi',
        'experience_list_en',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'instagram_url',
        'is_featured',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'order' => 'integer',
        'experience_years' => 'integer',
        'specialties_vi' => 'array',
        'specialties_en' => 'array',
        'experience_list_vi' => 'array',
        'experience_list_en' => 'array',
    ];

    // Helper methods
    public function getPosition()
    {
        return app()->getLocale() == 'en' ? $this->position_en : $this->position_vi;
    }

    public function getDetailedPosition()
    {
        return app()->getLocale() == 'en' ? $this->detailed_position_en : $this->detailed_position_vi;
    }

    public function getBio()
    {
        return app()->getLocale() == 'en' ? $this->bio_en : $this->bio_vi;
    }

    public function getDetailedBio()
    {
        return app()->getLocale() == 'en' ? $this->detailed_bio_en : $this->detailed_bio_vi;
    }

    public function getLocation()
    {
        return app()->getLocale() == 'en' ? $this->location_en : $this->location_vi;
    }

    public function getFieldOfActivity()
    {
        return app()->getLocale() == 'en' ? $this->field_of_activity_en : $this->field_of_activity_vi;
    }

    public function getSpecialties()
    {
        return app()->getLocale() == 'en' ? $this->specialties_en : $this->specialties_vi;
    }

    public function getExperienceList()
    {
        return app()->getLocale() == 'en' ? $this->experience_list_en : $this->experience_list_vi;
    }

    // Generate slug from name
    public static function boot()
    {
        parent::boot();

        static::creating(function ($teamMember) {
            if (empty($teamMember->slug)) {
                $teamMember->slug = \Str::slug($teamMember->name);
            }
        });

        static::updating(function ($teamMember) {
            if ($teamMember->isDirty('name') && empty($teamMember->slug)) {
                $teamMember->slug = \Str::slug($teamMember->name);
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

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }
}
