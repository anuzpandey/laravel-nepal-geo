<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelNepalGeo\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    protected $fillable = [
        'name',
        'name_np',
        'latitude',
        'longitude',
        'district_id',
    ];

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
}
