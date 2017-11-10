<?php

namespace App\Listeners;

use App\Events\ContactForm;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail as ContactFormMailable;

class SendEmailOnOurService
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  ContactForm  $event
     * @return void
     */
    public function handle(ContactForm $event)
    {
        $model = $event->contactModel;

        // Process before sending this email ...

        Mail::to($model)->send(new ContactFormMailable($model));

        // Log or something ...
    }
}
