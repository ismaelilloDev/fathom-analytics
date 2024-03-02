<?php

namespace Ismaelillodev\FathomAnalytics\Commands;

use Illuminate\Console\Command;

class FathomAnalyticsCommand extends Command
{
    public $signature = 'fathom-analytics';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
