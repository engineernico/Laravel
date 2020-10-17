<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        \App\console\commands\expiration::class,
        \App\console\commands\notify::class,
    ];

    protected function schedule(Schedule $schedule)
    {
     $schedule->command('user:expire') ->everyMinute();
      $schedule->command('email:notify') ->daily();
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}
