<?php

namespace BubbaOps\Boggarts\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BubbaOps\Boggarts\Boggarts
 *
 * @method static Boggarts make(iterable $config):
 */
class Boggarts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'boggart';
    }
}
