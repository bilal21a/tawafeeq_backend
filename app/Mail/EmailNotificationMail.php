<?php

namespace App\Mail;

use App\Models\Messages;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailNotificationMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $messages;
    protected $sender;
    protected $reciver;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($messages,$sender,$reciver)
    {
        $this->messages = $messages;
        $this->sender = $sender;
        $this->reciver = $reciver;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $messages = $this->messages;
        $sender = $this->sender;
        $reciver = $this->reciver;
        return $this->view('email_send',compact('messages','sender','reciver'));
    }
}
