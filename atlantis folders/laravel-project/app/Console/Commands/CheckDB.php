<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'CheckDB';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'show me my database name';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}
