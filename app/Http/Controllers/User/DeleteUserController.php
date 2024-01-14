<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class DeleteUserController extends Controller
{
    public function __invoke($id){
        $user = User::findOrFail($id);
        $user->delete();
        $users = User::get();
        return view('user.index', ['users' => $users]);
    }
}
