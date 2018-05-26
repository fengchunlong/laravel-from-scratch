<?php

namespace App\Listeners;

use App\Events\TreadCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifySubscribers
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
     * @param  TreadCreated  $event
     * @return void
     */
    public function handle(TreadCreated $event)
    {
        var_dump('Thread was published to the forum');
    }
}
