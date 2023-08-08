<?php

namespace App\Listeners;

use App\Events\SendMailContact;
use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class SendMailContactFired
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SendMailContact $event): void
    {
        Mail::to('pereira.joaquin@gmail.com')->queue(
            new ContactFormMail($event->contact)
        );
    }
}
