<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelNepalGeo\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class State extends Model
{
    public $fillable = [
        'name',
        'name_np',
    ];

    public function districts(): HasMany
    {
        return $this->hasMany(District::class);
    }

    public function cities(): HasManyThrough
    {
        return $this->hasManyThrough(City::class, District::class);
    }
}
