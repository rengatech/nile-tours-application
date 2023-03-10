<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'background_image', 'title', 'meta_description',];

    protected $casts = [
        'background_image' => 'array',
    ];
}
