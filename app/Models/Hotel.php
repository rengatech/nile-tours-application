<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'seo_title', 'short_description', 'description', 'seo_meta_description',];

    protected $casts = [
        'image' => 'array',
    ];
}

