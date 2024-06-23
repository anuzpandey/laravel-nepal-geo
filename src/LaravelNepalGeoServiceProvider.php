<?php

namespace AnuzPandey\LaravelNepalGeo;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AnuzPandey\LaravelNepalGeo\Commands\LaravelNepalGeoCommand;

class LaravelNepalGeoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-nepal-geo')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-nepal-geo_table')
            ->hasCommand(LaravelNepalGeoCommand::class);
    }
}
