<?php

namespace App\Console;

use App\User;
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
        // \App\Console\Commands\Inspire::class,
        \App\Console\Commands\FiterUser::class,
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
            // $members = User::where('member','!=','')
            //         ->where('member','<',time())
            //         ->get();
            // foreach ($members as $member) {
            //     $user = User::find($member->id);
            //     $user->member = '';
            //     $user->save();
            // }
        })->everyMinute();
    }
}
