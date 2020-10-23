<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\VideoViewr;

class IncreaseViewer
{

    public function __construct()
    {
        //
    }


    public function handle(VideoViewr $event)
    {
        $this->increase_videos($event->videoName);
    }

    public function increase_videos($videos){
        $videos->viewers =  $videos->viewers +1;
        $videos->save();
    }
}
