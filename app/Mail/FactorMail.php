<?php

namespace App\Mail;

use App\Models\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FactorMail extends Mailable
{
    use Queueable, SerializesModels;
    public $x;

    /**
     * Create a new message instance.
     */
    public function __construct($user )
    {
        $this->x = $user;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Factor Mail',
            to: [
                new Address($this->x->email)
            ]
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.Factor',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    // public function build()
    // {
    //     return $this->view('emails.Factor')->with([
    //         'user' => $this->user->name,
    //     ])
    //         ->from('omidasgary@gmail.com')
    //         ->subject('فاکتور شما');
    // }
}
