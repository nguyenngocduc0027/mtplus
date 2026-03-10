<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeAboutSection extends Model
{
    protected $fillable = [
        'heading_vi',
        'heading_en',
        'description_vi',
        'description_en',
        'about_main_image',
        'about_thumb_image',
        'button_url',
        'counter_1_title_vi',
        'counter_1_title_en',
        'counter_1_number',
        'counter_1_suffix',
        'counter_1_desc_vi',
        'counter_1_desc_en',
        'counter_2_title_vi',
        'counter_2_title_en',
        'counter_2_number',
        'counter_2_suffix',
        'counter_2_desc_vi',
        'counter_2_desc_en',
        'counter_3_title_vi',
        'counter_3_title_en',
        'counter_3_number',
        'counter_3_suffix',
        'counter_3_desc_vi',
        'counter_3_desc_en',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Helper methods to get localized content
    public function getHeading()
    {
        return app()->getLocale() == 'en' ? $this->heading_en : $this->heading_vi;
    }

    public function getDescription()
    {
        return app()->getLocale() == 'en' ? $this->description_en : $this->description_vi;
    }
}
