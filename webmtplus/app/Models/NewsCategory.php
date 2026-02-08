<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_vi',
        'name_en',
        'slug',
        'description_vi',
        'description_en',
        'icon',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Accessor for multi-language name
    public function getNameAttribute()
    {
        return app()->getLocale() === 'vi' ? $this->name_vi : $this->name_en;
    }

    public function getDescriptionAttribute()
    {
        return app()->getLocale() === 'vi' ? $this->description_vi : $this->description_en;
    }

    // Relationships
    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('name_vi', 'asc');
    }

    // Get news count
    public function getNewsCountAttribute()
    {
        return $this->news()->where('is_active', true)->where('status', 'published')->count();
    }
}
