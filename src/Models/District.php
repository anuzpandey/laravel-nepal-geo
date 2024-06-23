<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelNepalGeo\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    protected $fillable = [
        'name',
        'name_np',
        'province_id',
    ];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    public function province(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
