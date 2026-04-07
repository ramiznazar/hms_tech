<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    protected $fillable = [
        'name',
        'price',
        'billing_cycle',
        'description',
        'features',
        'is_featured',
        'sort_order',
    ];

    protected $casts = [
        'features'    => 'array',
        'is_featured' => 'boolean',
    ];
}
