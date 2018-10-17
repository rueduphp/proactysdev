<?php

namespace Proactys\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /** @var array */
    protected $data = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
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
        return $this
            ->to('info@proactys.swiss')
            ->from('info@proactys.swiss')
            ->view('mail.contact')
            ->with([
                'data' => $this->data
            ]);
    }
}
