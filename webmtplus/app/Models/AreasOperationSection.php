<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreasOperationSection extends Model
{
    protected $fillable = [
        'section_number',
        'image_layout',
        'main_image_path',
        'thumbnail_image_path',
        'subtitle_vi',
        'subtitle_en',
        'title_vi',
        'title_en',
        'description_vi',
        'description_en',
        'card_1_text_vi',
        'card_1_text_en',
        'card_2_text_vi',
        'card_2_text_en',
        'card_3_text_vi',
        'card_3_text_en',
    ];

    protected $casts = [
        'section_number' => 'integer',
    ];

    // Helper methods for localization
    public function getSubtitle()
    {
        return app()->getLocale() == 'en' ? $this->subtitle_en : $this->subtitle_vi;
    }

    public function getTitle()
    {
        return app()->getLocale() == 'en' ? $this->title_en : $this->title_vi;
    }

    public function getDescription()
    {
        return app()->getLocale() == 'en' ? $this->description_en : $this->description_vi;
    }

    public function getCardText($cardNumber)
    {
        $field = 'card_' . $cardNumber . '_text_' . (app()->getLocale() == 'en' ? 'en' : 'vi');
        return $this->$field;
    }

    // Get all cards as array
    public function getCards()
    {
        $cards = [];
        for ($i = 1; $i <= 3; $i++) {
            $text = $this->getCardText($i);
            if ($text) {
                $cards[] = $text;
            }
        }
        return $cards;
    }
}
