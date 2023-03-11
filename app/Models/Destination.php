<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'image', 'seo_title', 'description', 'seo_meta_description',];

    protected $casts = [
        'image' => 'array',
    ];
}
