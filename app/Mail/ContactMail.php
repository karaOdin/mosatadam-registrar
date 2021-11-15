<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->data['email'])
                    ->subject($this->data['sujet'])
                    ->markdown('mail.contact-mail')->with('data',request()->data)
                    ->attach($this->data['document']->getRealPath(),[
                         'as' => $this->data['document']->getClientOriginalName(),
                        'mime' => $this->data['document']->getClientMimeType(),
                    ]
                       
                    )
                ;
      
    }
}
