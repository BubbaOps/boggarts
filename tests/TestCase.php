<?php

namespace BubbaOps\Boggarts\Tests;

use BubbaOps\Boggarts\BoggartsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            BoggartsServiceProvider::class,
        ];
    }
}
