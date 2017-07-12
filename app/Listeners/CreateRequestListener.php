<?php

namespace App\Listeners;

use App\Events\RequestEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Request;

class CreateRequestListener implements ShouldQueue
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
     * @param  RequestEvent  $event
     * @return void
     */
    public function handle(RequestEvent $event)
    {
        //
        $certificateRequest=new Request();
        $certificateRequest->studentId=$event->studentId;
        $certificateRequest->status=0;
        $certificateRequest->save();
    }
}
