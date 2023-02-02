<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:cmd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Start:');
        for($i=1;$i<11;$i++) {
             printf('Testing: %s' . PHP_EOL,$i);
        }


        $this->info('End:');
        return Command::SUCCESS;
    }
}
