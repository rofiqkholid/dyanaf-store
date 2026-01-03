<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'tag',
        'tag_color',
        'icon',
        'estimation',
        'price',
        'price_display',
        'price_unit',
        'route_name',
        'order',
        'is_active',
    ];

    protected $casts = [
        'price' => 'integer',
        'is_active' => 'boolean',
    ];

    /**
     * Get the category that owns this service.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }

    /**
     * Scope to get only active services.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Get formatted price for display.
     */
    public function getFormattedPriceAttribute(): string
    {
        if ($this->price_display) {
            return $this->price_display;
        }
        return number_format($this->price, 0, ',', '.');
    }
}
