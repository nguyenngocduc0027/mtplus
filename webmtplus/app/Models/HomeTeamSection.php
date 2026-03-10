<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeTeamSection extends Model
{
    protected $fillable = [
        'subtitle_vi',
        'subtitle_en',
        'heading_vi',
        'heading_en',
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
