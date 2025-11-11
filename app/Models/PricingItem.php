<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PricingItem extends Model
{
    protected $fillable = [
        'service_id',
        'item_name',
        'description',
        'price',
        'unit',
        'is_addon',
        'display_order',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'is_addon' => 'boolean',
            'display_order' => 'integer',
        ];
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function scopeAddons($query)
    {
        return $query->where('is_addon', true);
    }

    public function scopeMainItems($query)
    {
        return $query->where('is_addon', false);
    }

    public function getFormattedPriceAttribute(): string
    {
        return 'KSh ' . number_format($this->price, 2);
    }
}
