<?php

namespace AnuzPandey\LaravelNepalGeo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AnuzPandey\LaravelNepalGeo\LaravelNepalGeo
 */
class LaravelNepalGeo extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AnuzPandey\LaravelNepalGeo\LaravelNepalGeo::class;
    }
}
