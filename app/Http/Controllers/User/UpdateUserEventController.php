<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;

class UpdateUserEventController extends Controller
{
    public function update($id){
        $event = Event::query()->find($id);
        $event->title = 'titleUpdate';
        $event->notes = 'notesUpdate';
        $event->save();
        $userId = $event->user->id;
        $user = User::findOrFail($userId);
        $events = Event::get();
        return view('event.index', ['user' => $user]);
    }
}
