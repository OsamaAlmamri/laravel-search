<?php

namespace OsamaAlmamri\LaravelSearch\Commands;

use Illuminate\Console\Command;

class LaravelSearchCommand extends Command
{
    public $signature = 'laravel-search';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
