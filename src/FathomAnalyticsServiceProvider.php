<?php

namespace Ismaelillodev\FathomAnalytics;

use Ismaelillodev\FathomAnalytics\Commands\FathomAnalyticsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FathomAnalyticsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('fathom-analytics')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_fathom-analytics_table')
            ->hasCommand(FathomAnalyticsCommand::class);
    }
}
