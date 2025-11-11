<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuoteRequest extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'service_id',
        'location_id',
        'message',
        'estimated_size',
        'status',
        'admin_notes',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeQuoted($query)
    {
        return $query->where('status', 'quoted');
    }

    public function scopeConverted($query)
    {
        return $query->where('status', 'converted');
    }

    public function markAsQuoted(): void
    {
        $this->update(['status' => 'quoted']);
    }

    public function markAsConverted(): void
    {
        $this->update(['status' => 'converted']);
    }

    public function markAsDeclined(): void
    {
        $this->update(['status' => 'declined']);
    }
}
