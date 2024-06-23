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
                '0002_02_02_000001_create_states_table',
                '0002_02_02_000002_create_districts_table',
                '0002_02_02_000003_create_cities_table',
            ]);
    }
}
