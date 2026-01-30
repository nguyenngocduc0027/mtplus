<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperationArea extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'image_path',
        'image_path_2',
        'content',
        'card_1_text',
        'card_2_text',
        'card_3_text',
    ];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
