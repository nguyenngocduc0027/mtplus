<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisionContent extends Model
{
    protected $table = 'vision_content';

    protected $fillable = [
        'title_vi',
        'title_en',
        'description_vi',
        'description_en',
        'timeline_1_vi',
        'timeline_1_en',
        'timeline_2_vi',
        'timeline_2_en',
        'timeline_3_vi',
        'timeline_3_en',
        'timeline_4_vi',
        'timeline_4_en',
        'image_path',
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

    // Helper method to get a specific timeline based on current locale
    public function getTimeline($number)
    {
        if ($number < 1 || $number > 4) {
            return null;
        }

        $field = 'timeline_' . $number . '_' . (app()->getLocale() == 'en' ? 'en' : 'vi');
        return $this->$field;
    }

    // Helper method to get all timelines as array based on current locale
    public function getTimelines()
    {
        $timelines = [];
        for ($i = 1; $i <= 4; $i++) {
            $timeline = $this->getTimeline($i);
            if ($timeline) {
                $timelines[] = $timeline;
            }
        }
        return $timelines;
    }
}
