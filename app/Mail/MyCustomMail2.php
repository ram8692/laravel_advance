<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyCustomMail2 extends Mailable
{
    use Queueable, SerializesModels;

    protected $dynamicData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dydata)
    {
        $this->dynamicData = $dydata; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.my_custom_mail')
                ->with(['dynamicData' => $this->dynamicData]);
        //return $this->view('view.name');
    }
}
