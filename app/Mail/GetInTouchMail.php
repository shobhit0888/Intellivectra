<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class GetInTouchMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    protected $attachment;

    /**
     * Create a new message instance.
     *
     * @param array $data
     * @param string|null $attachment
     */
    public function __construct(array $data, $attachment = null)
    {
        $this->data = $data;
        $this->attachment = $attachment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->from(env('MAIL_FROM_ADDRESS'), 'Get In Touch Data')
                      ->subject('Get In Touch User Data')
                      ->view('landing.email.get-in-touch')
                      ->with('data', $this->data);

        if ($this->attachment) {
            $email->attach($this->attachment);
        }

        return $email;
    }
}
