<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class ShowUserEventsController extends Controller
{
    public function getEvents($id){
        $user = User::find($id);
        return view('event.index', ['user' => $user]);
    }
}
