<?php

namespace BubbaOps\Boggarts\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BubbaOps\Boggarts\Boggarts
 */
class Boggarts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \BubbaOps\Boggarts\Boggarts::class;
    }
}
