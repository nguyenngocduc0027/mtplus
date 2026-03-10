<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CapabilitiesContent extends Model
{
    protected $table = 'capabilities_content';

    protected $fillable = [
        'section_1_title_vi',
        'section_1_title_en',

        // Feature 1
        'feature_1_icon_path',
        'feature_1_title_vi',
        'feature_1_title_en',
        'feature_1_description_vi',
        'feature_1_description_en',

        // Feature 2
        'feature_2_icon_path',
        'feature_2_title_vi',
        'feature_2_title_en',
        'feature_2_description_vi',
        'feature_2_description_en',

        // Feature 3
        'feature_3_icon_path',
        'feature_3_title_vi',
        'feature_3_title_en',
        'feature_3_description_vi',
        'feature_3_description_en',

        // Feature 4
        'feature_4_icon_path',
        'feature_4_title_vi',
        'feature_4_title_en',
        'feature_4_description_vi',
        'feature_4_description_en',

        // Section 3
        'main_image_path',
        'thumbnail_image_path',
        'section_3_title_vi',
        'section_3_title_en',
        'section_3_description_vi',
        'section_3_description_en',

        // Progress bars
        'progress_1_title_vi',
        'progress_1_title_en',
        'progress_1_percentage',
        'progress_2_title_vi',
        'progress_2_title_en',
        'progress_2_percentage',
        'progress_3_title_vi',
        'progress_3_title_en',
        'progress_3_percentage',
    ];

    // Helper method to get Section 1 title based on current locale
    public function getSection1Title()
    {
        return app()->getLocale() == 'en' ? $this->section_1_title_en : $this->section_1_title_vi;
    }

    // Helper method to get feature title based on current locale
    public function getFeatureTitle($number)
    {
        if ($number < 1 || $number > 4) {
            return null;
        }

        $field = 'feature_' . $number . '_title_' . (app()->getLocale() == 'en' ? 'en' : 'vi');
        return $this->$field;
    }

    // Helper method to get feature description based on current locale
    public function getFeatureDescription($number)
    {
        if ($number < 1 || $number > 4) {
            return null;
        }

        $field = 'feature_' . $number . '_description_' . (app()->getLocale() == 'en' ? 'en' : 'vi');
        return $this->$field;
    }

    // Helper method to get feature icon
    public function getFeatureIcon($number)
    {
        if ($number < 1 || $number > 4) {
            return null;
        }

        $field = 'feature_' . $number . '_icon_path';
        return $this->$field;
    }

    // Helper method to get Section 3 title based on current locale
    public function getSection3Title()
    {
        return app()->getLocale() == 'en' ? $this->section_3_title_en : $this->section_3_title_vi;
    }

    // Helper method to get Section 3 description based on current locale
    public function getSection3Description()
    {
        return app()->getLocale() == 'en' ? $this->section_3_description_en : $this->section_3_description_vi;
    }

    // Helper method to get progress title based on current locale
    public function getProgressTitle($number)
    {
        if ($number < 1 || $number > 3) {
            return null;
        }

        $field = 'progress_' . $number . '_title_' . (app()->getLocale() == 'en' ? 'en' : 'vi');
        return $this->$field;
    }

    // Helper method to get progress percentage
    public function getProgressPercentage($number)
    {
        if ($number < 1 || $number > 3) {
            return 0;
        }

        $field = 'progress_' . $number . '_percentage';
        return $this->$field;
    }
}
