<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisionContent extends Model
{
    protected $fillable = [
        'locale',
        'section_subtitle',
        'section_title',
        'section_description',
        'section_image',
        'timeline_1',
        'timeline_2',
        'timeline_3',
        'timeline_4',
    ];
}
