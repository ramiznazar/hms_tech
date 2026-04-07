<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'short_description',
        'description',
        'author',
        'published_at',
        'sort_order',
        'tags',
    ];

    protected $casts = [
        'published_at' => 'date',
        'tags'         => 'array',
    ];
}
