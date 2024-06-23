<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelNepalGeo;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelNepalGeoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-nepal-geo')
            ->hasConfigFile()
            ->hasMigrations([
                'create_states_table',
                'create_districts_table',
                'create_cities_table',
            ]);
    }
}
