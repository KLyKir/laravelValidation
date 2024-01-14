<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateEventController extends Controller
{
    public function index($id){
        $event = Event::findOrFail($id);
        return view('event.add_update', ['event' => $event]);
    }
    public function update(Request $request){
        $data = $request->validate([
            'title' => ['required', 'string', 'max:10'],
            'notes' => ['required', 'string'],
            'dt_start' => ['required', 'date', 'after_or_equal:today'],
            'dt_end' => ['required', 'date', 'after:dt_start'],
            'user' => ['numeric']
        ]);
        if($data){
            $event = Event::query()->find($request->id);
            $event->title = $data['title'];
            $event->notes = $data['notes'];
            $event->dt_start = $data['dt_start'];
            $event->dt_end= $data['dt_end'];
            $event->user_id = $data['user'];
            $event->save();
            $events = Event::get();
            return view('event.index', ['events' => $events]);
        }

    }
}
