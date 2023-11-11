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
    protected $dynamictemplate;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dydata,$dytemplate)
    {
        $this->dynamicData = $dydata; 
        $this->dynamictemplate = $dytemplate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view($this->dynamictemplate)
                ->with(['dynamicData' => $this->dynamicData]);
        //return $this->view('view.name');
    }
}
