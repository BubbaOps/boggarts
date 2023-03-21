<?php

namespace BubbaOps\Boggarts;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use BubbaOps\Boggarts\Commands\BoggartsCommand;

class BoggartsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('boggarts')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_boggarts_table')
            ->hasCommand(BoggartsCommand::class);
    }
}
