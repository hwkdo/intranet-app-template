<?php

namespace Hwkdo\IntranetAppTemplate\Commands;

use Illuminate\Console\Command;

class IntranetAppTemplateCommand extends Command
{
    public $signature = 'intranet-app-template';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
