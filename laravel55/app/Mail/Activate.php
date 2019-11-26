<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
//use App\Models\ActivateModel;

class Activate extends Mailable
{
    use Queueable, SerializesModels;

    private $activate;
	public $email_data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_data)
    {
        //$this->activate = $activate;
		$this->email_data = $email_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        //return $this->markdown('emails.activate')->with('activate', $this->activate);
        return $this->from('1509760688@qq.com', '田闯')
                    ->view($this -> email_data -> email_view)
					->subject($this -> email_data -> email_subject);
    }
    
}
