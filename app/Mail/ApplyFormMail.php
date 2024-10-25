<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Attachment;

class ApplyFormMail extends Mailable
{
    public Request $request;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->request = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('no-reply@inteelivectra.com', 'Get In Touch Data'),
            subject: 'Get In Touch User Data',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
            with:[
                'data' => $this->request
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromData(fn () => $this->invoiceService->createPdf($this->user,$this->order)->output(), 'Farmtoplate.pdf')
            ->withMime('application/pdf'),
        ];
    }
}
