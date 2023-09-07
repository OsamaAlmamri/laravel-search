<?php

namespace OsamaAlmamri\LaravelSearch;

use OsamaAlmamri\LaravelSearch\Commands\LaravelSearchCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelSearchServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {

        $package
            ->name('laravel-search')
            ->hasConfigFile('searchable')

            ->hasCommand(LaravelSearchCommand::class);
    }
}
