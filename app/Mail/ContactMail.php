<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $attachmentPath;

    public function __construct($data, $attachmentPath)
    {
        $this->data = $data;
        $this->attachmentPath = $attachmentPath;
    }

    public function build()
    {
        return $this->view('emails.contact')
            ->subject('New Contact Form Submission')
            ->attach(storage_path('app/' . $this->attachmentPath), [
                'as' => 'attachment.' . pathinfo($this->attachmentPath, PATHINFO_EXTENSION),
            ]);
    }
}
