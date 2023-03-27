<?php

use BubbaOps\Boggarts\Facades\Boggarts as BoggartsFacade;
use BubbaOps\Boggarts\Tests\TestCase;

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "uses()" function to bind a different classes or traits.
|
*/
uses(TestCase::class)->in(__DIR__);

function boggartConfig(): array
{
    return include 'config/boggarts.php';
}

function excise(): BubbaOps\Boggarts\Boggarts
{
    return BoggartsFacade::make(config('boggarts'));
}
