<?php

namespace BubbaOps\Boggarts\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BubbaOps\Boggarts\Boggarts
 *
 * @property string $output
 *
 * @method static \BubbaOps\Boggarts\Boggarts make(iterable $config):
 * @method static \BubbaOps\Boggarts\Boggarts text(string $text)
 * @method static string finalize()
 * @method static array getTypes()
 */
class Boggarts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'boggart';
    }
}
