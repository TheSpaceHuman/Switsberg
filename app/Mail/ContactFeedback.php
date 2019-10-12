<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFeedback extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
      $this->user_name = $data['name'];
      $this->user_email = $data['email'];
      $this->user_phone = $data['phone'];
      $this->user_message = $data['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->from(config('mail.from.address'))
          ->markdown('email.contactFeedback')
          ->subject('Контакты')
          ->with([
              'user_name' => $this->user_name,
              'user_email' => $this->user_email,
              'user_phone' => $this->user_phone,
              'user_message' => $this->user_message,
          ]);
    }
}
