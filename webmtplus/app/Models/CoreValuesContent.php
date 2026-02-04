<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoreValuesContent extends Model
{
    protected $table = 'core_values_content';

    protected $fillable = [
        'section_subtitle_vi',
        'section_subtitle_en',
        'section_title_vi',
        'section_title_en',
        'value_1_title_vi',
        'value_1_title_en',
        'value_1_icon',
        'value_1_description_vi',
        'value_1_description_en',
        'value_2_title_vi',
        'value_2_title_en',
        'value_2_icon',
        'value_2_description_vi',
        'value_2_description_en',
        'value_3_title_vi',
        'value_3_title_en',
        'value_3_icon',
        'value_3_description_vi',
        'value_3_description_en',
        'value_4_title_vi',
        'value_4_title_en',
        'value_4_icon',
        'value_4_description_vi',
        'value_4_description_en',
    ];

    // Helper method to get section subtitle based on current locale
    public function getSectionSubtitle()
    {
        return app()->getLocale() == 'en' ? $this->section_subtitle_en : $this->section_subtitle_vi;
    }

    // Helper method to get section title based on current locale
    public function getSectionTitle()
    {
        return app()->getLocale() == 'en' ? $this->section_title_en : $this->section_title_vi;
    }

    // Helper method to get value title based on current locale
    public function getValueTitle($number)
    {
        if ($number < 1 || $number > 4) {
            return null;
        }

        $field = 'value_' . $number . '_title_' . (app()->getLocale() == 'en' ? 'en' : 'vi');
        return $this->$field;
    }

    // Helper method to get value description based on current locale
    public function getValueDescription($number)
    {
        if ($number < 1 || $number > 4) {
            return null;
        }

        $field = 'value_' . $number . '_description_' . (app()->getLocale() == 'en' ? 'en' : 'vi');
        return $this->$field;
    }

    // Helper method to get value icon
    public function getValueIcon($number)
    {
        if ($number < 1 || $number > 4) {
            return null;
        }

        $field = 'value_' . $number . '_icon';
        return $this->$field;
    }
}
