<?php

namespace BubbaOps\Boggarts;

use BubbaOps\Boggarts\Commands\BoggartsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
