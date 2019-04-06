<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendReplyToMail extends Mailable
{
    use Queueable, SerializesModels;

    public $text_message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($text_message)
    {
        $this->text_message = $text_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.mails.reply');
    }
}
