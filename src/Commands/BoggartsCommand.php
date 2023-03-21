<?php

namespace BubbaOps\Boggarts\Commands;

use Illuminate\Console\Command;

class BoggartsCommand extends Command
{
    public $signature = 'boggarts';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
