<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;

class DeleteEventController extends Controller
{
    public function __invoke($id){
        $event = Event::findOrFail($id);
        $event->delete();
        $events = Event::get();
        return view('event.index', ['events' => $events]);
    }
}
