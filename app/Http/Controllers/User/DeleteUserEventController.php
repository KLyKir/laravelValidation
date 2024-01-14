<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;

class DeleteUserEventController extends Controller
{
    public function __invoke($id){
        $event = Event::findOrFail($id);
        $userId = $event->user->id;
        $user = User::findOrFail($userId);
        $event->delete();
        return view('event.index', ['user' => $user]);
    }
}
