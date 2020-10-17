<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class notify extends Command
{

    protected $signature = 'email:notify';
    protected $description = 'sending email every day';
    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        //$users = User::select('email')-> get(); // return as dictionary
        $emails = User::pulck('email')-> toArray(); // return as array
        $data = ['fl'=>'english','sl'=>'german'];
        foreach ($emails as $email){
                Mail::To($email)->send(new \App\Mail\Notify($data));
        }
    }
}
