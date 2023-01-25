<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Mail\Notification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class MailSend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends a mail';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::with(['site' => function ($query) {
            $query->where('count', '=', 3);
        }])->get();

        if(count($users)>0){
            foreach ($users as $user)
            {
                Mail::to($user)->send(new Notification($user));
            }
        }
    }
}
