<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PaymentReminder extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {

    }


    public function envelope()
    {
        return new Envelope(
            subject: 'Payment Reminder',
        );
    }


    public function content()
    {
        return new Content(
            view: 'emails.payment',
        );
    }


    public function attachments()
    {
        return [];
    }
}
