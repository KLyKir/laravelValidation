<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class InsertUserEventController extends Controller
{
    public function insertEvent($id){
        $user = User::find($id);
        $user->events()->create([
            'title' => 'titleUser'.$id,
            'notes' => 'noteUser'.$id,
            'dt_start' => '2023-01-01',
            'dt_end' => '2023-02-02'
        ]);
        return view('event.index', ['user' => $user]);
    }
}
