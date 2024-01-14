<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateUserEventController extends Controller
{
    public function index($id){
        $event = Event::query()->find($id);
        return view('event.add_update', ['event' => $event, 'user' => $event->user]);
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
            $event->save();
            $userId = $event->user->id;
            $user = User::findOrFail($userId);
            return view('event.index', ['user' => $user]);
        }

    }
}
