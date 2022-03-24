<?php

namespace Lucacalcaterra\Swreports\Commands;

use Illuminate\Console\Command;

class SwreportsCommand extends Command
{
    public $signature = 'swreports';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
