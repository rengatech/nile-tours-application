<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'thumbnail_image',
        'youtube_embed_video_url',
        'images',
        'seo_title',
        'url_slug',
        'short_description',
        'description',
        'seo_meta_description',
    ];

    protected $casts = [
        'thumbnail_image' => 'array',
        'images' => 'array',
    ];

    public function destinations()
    {
        return $this->belongsToMany(Destination::class)
        ->withPivot([
            'destination_id', 'package_id'
        ]);
    }

}
