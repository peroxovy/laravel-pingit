<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SiteAccessCheck implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if($this->user->site()->exists())
        {
            $site = $this->user->site()->first();

            if($site->count < 3)
            {
                $context = stream_context_set_default( [
                    'ssl' => [
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                    ],
                ]);

                @$headers = get_headers($site->url, 0, $context);

                $status = "";

                if(!$headers)
                {
                    $status == "404";
                } else {
                    $status = substr($headers[0], 9, 3);
                }

                if($status == "404")
                {
                    $site->update([
                        'count' => $site->count+1,
                    ]);
                }
            }
        }
    }
}
