<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'icon',
        'title',
        'short_description',
        'heading',
        'description_1',
        'description_2',
        'sort_order',
        'technologies',
    ];

    protected $casts = [
        'technologies' => 'array',
    ];
}
