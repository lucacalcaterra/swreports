<?php

namespace Lucacalcaterra\Swreports;

use Lucacalcaterra\Swreports\Commands\SwreportsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SwreportsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('swreports')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_swreports_table')
            ->hasCommand(SwreportsCommand::class);
    }
}
