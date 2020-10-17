<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Notify extends Mailable
{
    use Queueable, SerializesModels;

    public $datahamada;
    public function __construct($data){
        $this->datahamada = $data;
    }


    public function build()
    {
        return $this->view('view.mails.emailSend',compact($this->datahamada));
    }
}
