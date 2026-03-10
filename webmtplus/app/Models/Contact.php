<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'terms_accepted',
        'ip_address',
        'status',
        'read_at',
    ];

    protected $casts = [
        'terms_accepted' => 'boolean',
        'read_at' => 'datetime',
    ];

    // Scopes
    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }

    public function scopeRead($query)
    {
        return $query->where('status', 'read');
    }

    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    // Helpers
    public function markAsRead()
    {
        $this->update([
            'status' => 'read',
            'read_at' => now(),
        ]);
    }

    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('d M, Y H:i');
    }
}
