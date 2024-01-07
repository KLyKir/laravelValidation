<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{

    public function index(){
        $events = Event::all();
        return view('event.index', ['events' => $events]);
    }

    public function show($id){
        $events = Event::findOrFail($id);
        return view('event.show', ['event' => $events]);
    }
}
