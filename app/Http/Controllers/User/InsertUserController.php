<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class InsertUserController extends Controller
{
    public function insert(){
        for($i = 0; $i < 10; $i++){
            $user = new User();
            $user->name = "name".$i;
            $user->email = "email".$i;
            $user->password = "password".$i;
            $user->save();
        }
        $users = User::get();
        return view('user.index', ['users' => $users]);
    }
}
