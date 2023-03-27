<?php

namespace BubbaOps\Boggarts\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @mixin \BubbaOps\Boggarts\Excise
 */
class Excise extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bubbaops.boggarts.excise';
    }
}
