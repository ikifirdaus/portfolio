<?php

namespace App\Listeners;

use App\Events\FormUserSubmit;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class FormUserSubmitNotification
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
     * @param  \App\Events\FormUserSubmit  $event
     * @return void
     */
    public function handle(FormUserSubmit $event)
    {
        //
    }
}
