<?php

namespace BubbaOps\Boggarts;

use BubbaOps\Boggarts\Facades\Boggarts;

class Excise
{
    public function __invoke(?string $string = null): string
    {
        $string = $string ?? '';

        return trim(Boggarts::text($stiring)->finalize());
    }
}
