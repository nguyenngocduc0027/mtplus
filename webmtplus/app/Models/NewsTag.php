<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsTag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_vi',
        'name_en',
        'slug',
    ];

    // Accessor for multi-language name
    public function getNameAttribute()
    {
        return app()->getLocale() === 'vi' ? $this->name_vi : $this->name_en;
    }

    // Relationships
    public function news()
    {
        return $this->belongsToMany(News::class, 'news_tag', 'tag_id', 'news_id')
                    ->withTimestamps();
    }

    // Get news count for this tag
    public function getNewsCountAttribute()
    {
        return $this->news()->where('is_active', true)->where('status', 'published')->count();
    }
}
