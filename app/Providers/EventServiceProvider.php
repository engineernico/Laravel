<?php

namespace App\Providers;

use App\Events\VideoViewr;
use App\Listeners\IncreaseViewer;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        VideoViewr::class => [  // event
            IncreaseViewer::class,  // listener
        ],
    ];

    public function boot()
    {
        parent::boot();

        //
    }
}
