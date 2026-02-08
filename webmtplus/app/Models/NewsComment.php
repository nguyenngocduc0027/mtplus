<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_id',
        'parent_id',
        'author_name',
        'author_email',
        'author_website',
        'content',
        'is_approved',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'is_approved' => 'boolean',
    ];

    // Relationships
    public function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }

    public function parent()
    {
        return $this->belongsTo(NewsComment::class, 'parent_id');
    }

    public function replies()
    {
        return $this->hasMany(NewsComment::class, 'parent_id');
    }

    public function approvedReplies()
    {
        return $this->replies()->where('is_approved', true);
    }

    // Scopes
    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }

    public function scopeTopLevel($query)
    {
        return $query->whereNull('parent_id');
    }

    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    // Helpers
    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('d M, Y');
    }

    public function getAvatarAttribute()
    {
        // Generate Gravatar URL
        $hash = md5(strtolower(trim($this->author_email)));
        return "https://www.gravatar.com/avatar/{$hash}?s=80&d=mp";
    }
}
