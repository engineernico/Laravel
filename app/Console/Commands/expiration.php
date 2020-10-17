<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class expiration extends Command
{

    protected $signature = 'user:expire';
    protected $description = 'expire users automatically every 5 minutes';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $users = User::where('expire', 0)->get(); //collection of users
        foreach ($users as $user) {
            $user->update(['expire' => 1]);
        }
    }
}
