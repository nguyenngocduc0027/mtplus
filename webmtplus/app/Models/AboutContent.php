<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    protected $fillable = [
        'locale',
        'subtitle',
        'title',
        'description',
        'image_main',
        'image_small',
        'counter_1_title',
        'counter_1_number',
        'counter_1_description',
        'counter_2_title',
        'counter_2_number',
        'counter_2_description',
        'counter_3_title',
        'counter_3_number',
        'counter_3_description',
    ];
}
