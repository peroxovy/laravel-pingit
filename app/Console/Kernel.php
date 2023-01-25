<?php

namespace App\Console;

use App\Models\User;
use App\Jobs\SiteAccessCheck;
use App\Console\Commands\MailSend;
use Illuminate\Support\Facades\Auth;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $users = User::all();

        foreach($users as $user)
        {
            $schedule->job(new SiteAccessCheck($user))->everyFiveMinutes();
        }
        $schedule->command(MailSend::class)->everyFiveMinutes();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
