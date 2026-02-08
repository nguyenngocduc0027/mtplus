<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title_vi',
        'title_en',
        'slug',
        'excerpt_vi',
        'excerpt_en',
        'content_vi',
        'content_en',
        'featured_image',
        'thumbnail',
        'gallery_images',
        'author_id',
        'author_name',
        'category_id',
        'view_count',
        'comment_count',
        'like_count',
        'meta_title_vi',
        'meta_title_en',
        'meta_description_vi',
        'meta_description_en',
        'meta_keywords_vi',
        'meta_keywords_en',
        'published_at',
        'status',
        'order',
        'is_featured',
        'is_trending',
        'is_active',
        'allow_comments',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
        'is_trending' => 'boolean',
        'is_active' => 'boolean',
        'allow_comments' => 'boolean',
    ];

    // Accessors for multi-language content
    public function getTitleAttribute()
    {
        return app()->getLocale() === 'vi' ? $this->title_vi : $this->title_en;
    }

    public function getExcerptAttribute()
    {
        return app()->getLocale() === 'vi' ? $this->excerpt_vi : $this->excerpt_en;
    }

    public function getContentAttribute()
    {
        return app()->getLocale() === 'vi' ? $this->content_vi : $this->content_en;
    }

    public function getMetaTitleAttribute()
    {
        $metaTitle = app()->getLocale() === 'vi' ? $this->meta_title_vi : $this->meta_title_en;
        return $metaTitle ?? $this->title;
    }

    public function getMetaDescriptionAttribute()
    {
        $metaDesc = app()->getLocale() === 'vi' ? $this->meta_description_vi : $this->meta_description_en;
        return $metaDesc ?? $this->excerpt;
    }

    // Relationships
    public function category()
    {
        return $this->belongsTo(NewsCategory::class, 'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(NewsTag::class, 'news_tag', 'news_id', 'tag_id')
                    ->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany(NewsComment::class, 'news_id');
    }

    public function approvedComments()
    {
        return $this->comments()->where('is_approved', true)->whereNull('parent_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                    ->where('published_at', '<=', now());
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeTrending($query)
    {
        return $query->where('is_trending', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')
                    ->orderBy('published_at', 'desc');
    }

    public function scopeRecent($query, $limit = 5)
    {
        return $query->orderBy('published_at', 'desc')->limit($limit);
    }

    public function scopePopular($query, $limit = 5)
    {
        return $query->orderBy('view_count', 'desc')->limit($limit);
    }

    public function scopeInCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    public function scopeWithTag($query, $tagId)
    {
        return $query->whereHas('tags', function($q) use ($tagId) {
            $q->where('news_tags.id', $tagId);
        });
    }

    // Helpers
    public function incrementViewCount()
    {
        $this->increment('view_count');
    }

    public function getFormattedDateAttribute()
    {
        if (!$this->published_at) {
            return null;
        }

        return [
            'day' => $this->published_at->format('d'),
            'month' => $this->published_at->format('M'),
            'year' => $this->published_at->format('Y'),
            'full' => $this->published_at->format('d M, Y'),
        ];
    }

    public function getReadingTimeAttribute()
    {
        $content = strip_tags($this->content);
        $wordCount = str_word_count($content);
        $minutes = ceil($wordCount / 200); // Average reading speed: 200 words/minute
        return $minutes;
    }

    // Check if news is published and active
    public function getIsPublishedAttribute()
    {
        return $this->status === 'published'
            && $this->is_active
            && $this->published_at <= now();
    }
}
