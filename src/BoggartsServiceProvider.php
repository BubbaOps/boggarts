<?php

namespace BubbaOps\Boggarts;

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
            ->hasConfigFile();
    }

    public function register()
    {
        $this->app->bind('bubbaops.boggarts', function () {
            return new \BubbaOps\Boggarts\Boggarts(config('boggarts'));
        });

        $this->app->bind('bubbaops.boggarts.excise', function () {
            return new \BubbaOps\Boggarts\Excise();
        });

        return parent::register();
    }
}
