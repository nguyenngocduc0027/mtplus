<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeTestimonialsSection extends Model
{
    protected $fillable = [
        'subtitle_vi',
        'subtitle_en',
        'heading_vi',
        'heading_en',
        'rating_score',
        'customer_count',
        'customer_text_vi',
        'customer_text_en',
        'testimonial_1_name',
        'testimonial_1_position_vi',
        'testimonial_1_position_en',
        'testimonial_1_company',
        'testimonial_1_avatar',
        'testimonial_1_quote_vi',
        'testimonial_1_quote_en',
        'testimonial_1_rating',
        'testimonial_2_name',
        'testimonial_2_position_vi',
        'testimonial_2_position_en',
        'testimonial_2_company',
        'testimonial_2_avatar',
        'testimonial_2_quote_vi',
        'testimonial_2_quote_en',
        'testimonial_2_rating',
        'testimonial_3_name',
        'testimonial_3_position_vi',
        'testimonial_3_position_en',
        'testimonial_3_company',
        'testimonial_3_avatar',
        'testimonial_3_quote_vi',
        'testimonial_3_quote_en',
        'testimonial_3_rating',
        'testimonial_4_name',
        'testimonial_4_position_vi',
        'testimonial_4_position_en',
        'testimonial_4_company',
        'testimonial_4_avatar',
        'testimonial_4_quote_vi',
        'testimonial_4_quote_en',
        'testimonial_4_rating',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'testimonial_1_rating' => 'integer',
        'testimonial_2_rating' => 'integer',
        'testimonial_3_rating' => 'integer',
        'testimonial_4_rating' => 'integer',
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

    public function getCustomerText()
    {
        return app()->getLocale() == 'en' ? $this->customer_text_en : $this->customer_text_vi;
    }

    // Get testimonial position by number and locale
    public function getTestimonialPosition($number)
    {
        $field = 'testimonial_' . $number . '_position_' . (app()->getLocale() == 'en' ? 'en' : 'vi');
        return $this->$field;
    }

    // Get testimonial quote by number and locale
    public function getTestimonialQuote($number)
    {
        $field = 'testimonial_' . $number . '_quote_' . (app()->getLocale() == 'en' ? 'en' : 'vi');
        return $this->$field;
    }

    // Get all testimonials as array
    public function getTestimonials()
    {
        $testimonials = [];
        for ($i = 1; $i <= 4; $i++) {
            if ($this->{'testimonial_' . $i . '_name'}) {
                $testimonials[] = [
                    'name' => $this->{'testimonial_' . $i . '_name'},
                    'position' => $this->getTestimonialPosition($i),
                    'company' => $this->{'testimonial_' . $i . '_company'},
                    'avatar' => $this->{'testimonial_' . $i . '_avatar'},
                    'quote' => $this->getTestimonialQuote($i),
                    'rating' => $this->{'testimonial_' . $i . '_rating'},
                ];
            }
        }
        return $testimonials;
    }
}
