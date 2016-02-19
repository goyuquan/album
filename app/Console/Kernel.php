<?php

namespace App\Console;

use App\user;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $currenttime = strtotime(date('y-m-d h:i:s',time()));
            $users = User::all();
            foreach ($users as $user) {
                if (strtotime($user->member) - $currenttime < 0){
                    $user->member = NULL;
                    $user->save();
                }
            }
        })->everyMinute();
    }
}
