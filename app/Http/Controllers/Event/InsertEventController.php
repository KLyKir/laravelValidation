<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;

class InsertEventController extends Controller
{
    public function insert(){
        for($i = 0; $i < 10; $i++){
            $event = new Event();
            $event->title = "name".$i;
            $event->notes = "description".$i;
            $event->dt_start = "2022-01-01";
            $event->dt_end = "2023-02-01";
            $event->user_id = 5;
            $event->save();
        }
        $events = Event::get();
        return view('event.index', ['events' => $events]);
    }
}
