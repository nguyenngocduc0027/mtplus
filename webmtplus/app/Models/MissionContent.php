<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MissionContent extends Model
{
    protected $table = 'mission_content';

    protected $fillable = [
        'title_vi',
        'title_en',
        'description_vi',
        'description_en',
        'feature_1_vi',
        'feature_1_en',
        'feature_2_vi',
        'feature_2_en',
        'feature_3_vi',
        'feature_3_en',
        'feature_4_vi',
        'feature_4_en',
        'background_image_path',
    ];

    // Helper method to get title based on current locale
    public function getTitle()
    {
        return app()->getLocale() == 'en' ? $this->title_en : $this->title_vi;
    }

    // Helper method to get description based on current locale
    public function getDescription()
    {
        return app()->getLocale() == 'en' ? $this->description_en : $this->description_vi;
    }

    // Helper method to get a specific feature based on current locale
    public function getFeature($number)
    {
        if ($number < 1 || $number > 4) {
            return null;
        }

        $field = 'feature_' . $number . '_' . (app()->getLocale() == 'en' ? 'en' : 'vi');
        return $this->$field;
    }

    // Helper method to get all features as array based on current locale
    public function getFeatures()
    {
        $features = [];
        for ($i = 1; $i <= 4; $i++) {
            $feature = $this->getFeature($i);
            if ($feature) {
                $features[] = $feature;
            }
        }
        return $features;
    }
}
