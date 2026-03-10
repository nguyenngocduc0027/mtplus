<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeWhyChooseSection extends Model
{
    protected $fillable = [
        'subtitle_vi',
        'subtitle_en',
        'heading_vi',
        'heading_en',
        'description_vi',
        'description_en',
        'feature_1_icon',
        'feature_1_title_vi',
        'feature_1_title_en',
        'feature_2_icon',
        'feature_2_title_vi',
        'feature_2_title_en',
        'feature_3_icon',
        'feature_3_title_vi',
        'feature_3_title_en',
        'feature_4_icon',
        'feature_4_title_vi',
        'feature_4_title_en',
        'button_url',
        'ceo_avatar',
        'ceo_quote_vi',
        'ceo_quote_en',
        'ceo_name',
        'ceo_position_vi',
        'ceo_position_en',
        'main_image',
        'thumb_image',
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

    public function getCeoQuote()
    {
        return app()->getLocale() == 'en' ? $this->ceo_quote_en : $this->ceo_quote_vi;
    }

    public function getCeoPosition()
    {
        return app()->getLocale() == 'en' ? $this->ceo_position_en : $this->ceo_position_vi;
    }
}
