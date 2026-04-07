<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'short_description',
        'description_1',
        'description_2',
        'client_name',
        'category_id',
        'location',
        'project_date',
        'status',
        'duration',
        'website_url',
        'ios_url',
        'android_url',
        'what_we_built',
        'why_it_was_built',
        'technologies',
        'thumbnail',
        'gallery_images',
        'sort_order',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'technologies'   => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
