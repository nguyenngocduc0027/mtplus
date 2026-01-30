<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MissionContent extends Model
{
    protected $fillable = [
        'locale',
        'section_2_title',
        'section_2_subtitle',
        'section_2_description',
        'section_2_image',
        'feature_1',
        'feature_2',
        'feature_3',
        'feature_4',
    ];
}
