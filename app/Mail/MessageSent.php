<?php

namespace App\Mail;

use App\Message;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageSent extends Mailable
{
    use Queueable, SerializesModels;

    public $message_sent;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Message $message_sent)
    {
        $this->message_sent = $message_sent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.message');
    }
}
