<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name1;
    public $subject1;
    public $message1;

    public function __construct($name,$subject,$message)
    {

        $this->name1=$name;
        $this->subject1=$subject;
        $this->message1=$message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name=$this->name1;
        $subject=$this->subject1;
        $message=$this->message1;
        return $this->view('emails.contact',['name'=>$name,'subject'=>$subject,'messages'=>$message]);
    }
}
