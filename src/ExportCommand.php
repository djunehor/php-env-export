<?php

namespace Djunehor\Env;


use Illuminate\Console\Command;

class ExportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'env:export
                           {--f|from=.env}
                            {--t|to=.env.example}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export env keys to a file';


    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $from = $this->hasOption('from') ? $this->option('from') : '.env';
        $to = $this->hasOption('to') ? $this->option('to') : '.env.example';
        export_env($from, $to);
        $this->info("Keys successfully exported from [$from] to [$to]");
    }
}

