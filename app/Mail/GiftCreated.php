<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GiftCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $gift;

    /**
     * Create a new message instance.
     */
    public function __construct($gift)
    {
        $this->gift = $gift;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Gift Created',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.gift_created',
            with: [
                'name' => $this->gift->name,
                'price' => $this->gift->price,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath(public_path('gift.jpg'))
                ->as('gift.jpg')
                ->withMime('image/jpeg'),
        ];
    }
}
