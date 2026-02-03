<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeHeroSection extends Model
{
    protected $fillable = [
        'subtitle_vi',
        'subtitle_en',
        'heading_vi',
        'heading_en',
        'description_vi',
        'description_en',
        'hero_slide_image',
        'hero_main_image',
        'thumb_para_vi',
        'thumb_para_en',
        'video_url',
        'learn_more_url',
        'read_more_url',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Helper methods to get localized content
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

    public function getThumbPara()
    {
        return app()->getLocale() == 'en' ? $this->thumb_para_en : $this->thumb_para_vi;
    }
}
