<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     */
    public function __construct(array $details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Contact Form: ' . $this->details['subject'])
                    ->replyTo($this->details['email'], $this->details['name'])
                    ->view('emails.contact')
                    ->with($this->details);
    }
}
