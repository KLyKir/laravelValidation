<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view('user.index', ['users' => $users]);
    }
    public function info($id){
        $user = User::findOrFail($id);
        return view('user.info', ['user' => $user]);
    }
}
