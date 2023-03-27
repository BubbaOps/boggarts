<?php

namespace BubbaOps\Boggarts;

use BubbaOps\Boggarts\Facades\Boggarts;

class Excise
{
    public static function clip(?string $string = null, string $characters = " \t\n\r\0\x0B"): string
    {
        $string = $string ?? '';

        return trim(
            string: Boggarts::text($string)->finalize(),
            characters: $characters
        );
    }

    public function __invoke(?string $string = null): string
    {
        $string = $string ?? '';

        return trim(Boggarts::text($string)->finalize());
    }
}
