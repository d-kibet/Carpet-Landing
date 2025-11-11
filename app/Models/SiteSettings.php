<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class SiteSettings extends Model
{
    protected $fillable = [
        'key',
        'value',
        'type',
        'group',
        'label',
        'description',
    ];

    protected static function booted(): void
    {
        // Clear cache when settings are updated
        static::saved(function () {
            Cache::forget('site_settings_all');
        });

        static::deleted(function () {
            Cache::forget('site_settings_all');
        });
    }

    public static function get(string $key, $default = null)
    {
        $settings = static::getAllCached();

        if (!isset($settings[$key])) {
            return $default;
        }

        $setting = $settings[$key];

        return match ($setting['type']) {
            'boolean' => (bool) $setting['value'],
            'image' => $setting['value'] ? Storage::url($setting['value']) : $default,
            default => $setting['value'] ?? $default,
        };
    }

    public static function getAllCached(): array
    {
        return Cache::remember('site_settings_all', now()->addDay(), function () {
            return static::query()
                ->get(['key', 'value', 'type'])
                ->mapWithKeys(function ($setting) {
                    return [
                        $setting->key => [
                            'value' => $setting->value,
                            'type' => $setting->type,
                        ],
                    ];
                })
                ->toArray();
        });
    }

    public static function set(string $key, $value): void
    {
        static::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );

        // Clear cache after setting
        Cache::forget('site_settings_all');
    }

    public static function clearCache(): void
    {
        Cache::forget('site_settings_all');
    }
}
