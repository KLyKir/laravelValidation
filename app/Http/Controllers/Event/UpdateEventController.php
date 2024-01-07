<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;

class UpdateEventController extends Controller
{
    public function update($id){
        $event = Event::query()->find($id);
        $event->title = 'titleUpdate';
        $event->notes = 'notesUpdate';
        $event->save();
        $events = Event::get();
        return view('event.index', ['events' => $events]);
    }
}
