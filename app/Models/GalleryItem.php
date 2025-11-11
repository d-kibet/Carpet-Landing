<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryItem extends Model
{
    protected $table = 'gallery_media';

    protected $fillable = [
        'type',
        'file_path',
        'youtube_url',
        'thumbnail_path',
        'title',
        'caption',
        'alt_text',
        'category',
        'display_order',
        'is_featured',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'display_order' => 'integer',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    // Alias for compatibility with views
    public function getImagePathAttribute()
    {
        return $this->file_path;
    }

    public function getDescriptionAttribute()
    {
        return $this->caption;
    }
}
