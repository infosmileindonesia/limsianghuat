<?php

namespace App\Mail;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mail_settings;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public Contact $contact,
        $mail_settings = [])
    {
        $this->mail_settings = $mail_settings;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $mail_from_address = $this->mail_settings['mail_from_address'];

        $date = Carbon::now();

        return new Envelope(
            from: new Address($mail_from_address),
            subject: 'Contact Mail ' . $date,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.contact',
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
