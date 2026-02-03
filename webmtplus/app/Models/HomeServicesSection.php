<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeServicesSection extends Model
{
    protected $fillable = [
        'subtitle_vi',
        'subtitle_en',
        'heading_vi',
        'heading_en',
        'service_1_title_vi',
        'service_1_title_en',
        'service_1_desc_vi',
        'service_1_desc_en',
        'service_1_image',
        'service_1_url',
        'service_2_title_vi',
        'service_2_title_en',
        'service_2_desc_vi',
        'service_2_desc_en',
        'service_2_image',
        'service_2_url',
        'service_3_title_vi',
        'service_3_title_en',
        'service_3_desc_vi',
        'service_3_desc_en',
        'service_3_image',
        'service_3_url',
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
}
