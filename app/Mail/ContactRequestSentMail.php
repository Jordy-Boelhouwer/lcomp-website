<?php

namespace App\Mail;

use App\ContactRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactRequestSentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactRequest;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactRequest $contactRequest)
    {
        $this->contactRequest = $contactRequest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact-request-sent')->subject('Bevestiging contactverzoek');
    }
}
