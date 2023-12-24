<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index(){
        $events = Event::get();
        return view('event.index', ['events' => $events]);
    }

    public function show($id){
        $events = Event::findOrFail($id);
        return view('event.show', ['event' => $events]);
    }
}
