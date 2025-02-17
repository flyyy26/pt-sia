<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactMessage;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public ContactMessage $messageData;
    /**
     * Create a new message instance.
     */
    public function __construct(ContactMessage $messageData)
    {
        $this->messageData = $messageData;
    }


    public function build()
    {
        return $this->subject('Pesan baru dari Website PT. SIA')
                    ->view('emails.contact_message')
                    ->with([
                        'messageData' => $this->messageData
                    ]);
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pesan baru dari Website PT. SIA',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact_message',
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
}
