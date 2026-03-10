<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeCommitmentSection extends Model
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
        'main_image',
        'thumb_image',
        'rating_score',
        'customer_count',
        'customer_text_vi',
        'customer_text_en',
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

    public function getCustomerText()
    {
        return app()->getLocale() == 'en' ? $this->customer_text_en : $this->customer_text_vi;
    }
}
