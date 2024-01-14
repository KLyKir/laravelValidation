<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class InsertUserEventController extends Controller
{
    public function index($id){
        $user = User::find($id);
        return view('event.add_update', ['user' => $user]);
    }
    public function insert(Request $request){
        $data = $request->validate([
            'title' => ['required', 'string', 'max:10'],
            'notes' => ['required', 'string'],
            'dt_start' => ['required', 'date', 'after_or_equal:today'],
            'dt_end' => ['required', 'date', 'after:dt_start'],
            'user' => ['numeric']
        ]);
        if($data){
            $user = User::find($request->userID);
            $user->events()->create([
                'title' => $data['title'],
                'notes' => $data['notes'],
                'dt_start' => $data['dt_start'],
                'dt_end' => $data['dt_end']
            ]);
            return view('event.index', ['user' => $user]);
        }


    }
}
