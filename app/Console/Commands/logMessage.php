<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;

class logMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:message {message}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $message = $this->argument('message');
        $logFile = storage_path('logs/custom_log.log');
        file_put_contents($logFile, $message . PHP_EOL, FILE_APPEND);

        $this->info('Message logged!');
        $now = Carbon::now()->toDateTimeString();
        $logFile = storage_path('logs/custom_log.log');
        $logEntry = "[{$now}] {$message}" . PHP_EOL;
        file_put_contents($logFile, $logEntry, FILE_APPEND);
        $this->info('Message logged!');
    }
}
 