<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    public $body;
    public $objet;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($objet,$body)
    {
        $this->objet = $objet;
        $this->body = $body;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->objet)
            ->view('emails.mail');
    }
}
