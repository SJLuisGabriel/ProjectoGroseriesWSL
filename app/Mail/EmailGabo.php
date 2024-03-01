<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class EmailGabo extends Mailable{

    use Queueable, SerializesModels;

    public $mailContent;

    /**
     * Create a new message instance.
     *
     * @param array $mailContent
     */
    public function __construct($mailContent){
        $this->mailContent = $mailContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->subject('Nuevo Mensaje de Groceries')
                    ->view('groceries.email');
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope(): Envelope{
        return new Envelope(
            subject: 'Nuevo Mensaje de Groceries'
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content(): Content{
        return new Content(
            view: 'groceries.email'
        );
    }
}

