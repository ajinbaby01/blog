<?php

namespace App\Providers;

use App\Providers\PublishedPost;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailToFollowers
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Providers\PublishedPost  $event
     * @return void
     */
    public function handle(PublishedPost $event)
    {
        try {
            // write code for sending mail to members in audience
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
