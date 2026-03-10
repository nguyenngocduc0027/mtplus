<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeContactSection extends Model
{
    protected $fillable = [
        'subtitle_vi',
        'subtitle_en',
        'heading_vi',
        'heading_en',
        'description_vi',
        'description_en',
        'map_url',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Helper methods
    public function getSubtitle()
    {
        return app()->getLocale() == 'en' ? $this->subtitle_en : $this->subtitle_vi;
    }

    public function getHeading()
    {
        return app()->getLocale() == 'en' ? $this->heading_en : $this->heading_vi;
    }

    public function getDescription()
    {
        return app()->getLocale() == 'en' ? $this->description_en : $this->description_vi;
    }
}
