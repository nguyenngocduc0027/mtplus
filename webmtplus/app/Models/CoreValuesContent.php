<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoreValuesContent extends Model
{
    protected $fillable = [
        'locale',
        'section_subtitle',
        'section_title',
        'value_1_title',
        'value_1_description',
        'value_1_icon',
        'value_2_title',
        'value_2_description',
        'value_2_icon',
        'value_3_title',
        'value_3_description',
        'value_3_icon',
        'value_4_title',
        'value_4_description',
        'value_4_icon',
    ];
}
