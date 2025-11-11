<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Location extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'address',
        'city',
        'google_maps_url',
        'phone',
        'email',
        'whatsapp',
        'operating_hours',
        'is_operational',
        'opening_date',
        'featured_image',
        'description',
        'display_order',
    ];

    protected function casts(): array
    {
        return [
            'operating_hours' => 'array',
            'is_operational' => 'boolean',
            'opening_date' => 'date',
            'display_order' => 'integer',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (Location $location) {
            if (empty($location->slug)) {
                $location->slug = Str::slug($location->name);
            }
        });
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class);
    }

    public function testimonials(): HasMany
    {
        return $this->hasMany(Testimonial::class);
    }

    public function quoteRequests(): HasMany
    {
        return $this->hasMany(QuoteRequest::class);
    }

    public function isComingSoon(): bool
    {
        return !$this->is_operational;
    }
}
