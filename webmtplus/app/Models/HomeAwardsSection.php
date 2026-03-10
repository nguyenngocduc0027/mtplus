<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeAwardsSection extends Model
{
    protected $fillable = [
        'subtitle_vi',
        'subtitle_en',
        'heading_vi',
        'heading_en',
        'award_1_icon',
        'award_1_year',
        'award_1_title_vi',
        'award_1_title_en',
        'award_2_icon',
        'award_2_year',
        'award_2_title_vi',
        'award_2_title_en',
        'award_3_icon',
        'award_3_year',
        'award_3_title_vi',
        'award_3_title_en',
        'award_4_icon',
        'award_4_year',
        'award_4_title_vi',
        'award_4_title_en',
        'award_5_icon',
        'award_5_year',
        'award_5_title_vi',
        'award_5_title_en',
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

    // Get award title by number and locale
    public function getAwardTitle($number)
    {
        $field = 'award_' . $number . '_title_' . (app()->getLocale() == 'en' ? 'en' : 'vi');
        return $this->$field;
    }

    // Get all awards as array
    public function getAwards()
    {
        $awards = [];
        for ($i = 1; $i <= 5; $i++) {
            if ($this->{'award_' . $i . '_year'}) {
                $awards[] = [
                    'icon' => $this->{'award_' . $i . '_icon'},
                    'year' => $this->{'award_' . $i . '_year'},
                    'title' => $this->getAwardTitle($i),
                ];
            }
        }
        return $awards;
    }
}
