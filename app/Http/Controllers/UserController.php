<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

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
