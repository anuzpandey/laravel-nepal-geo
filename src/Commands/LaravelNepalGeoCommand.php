<?php

namespace AnuzPandey\LaravelNepalGeo\Commands;

use Illuminate\Console\Command;

class LaravelNepalGeoCommand extends Command
{
    public $signature = 'laravel-nepal-geo';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
