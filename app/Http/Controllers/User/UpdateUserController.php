<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class UpdateUserController extends Controller
{
    public function update($id){
        $user = User::query()->find($id);
        $user->name = 'nameUpdate';
        $user->email = 'emailUpdate';
        $user->save();
        $users = User::get();
        return view('user.index', ['users' => $users]);
    }
}
