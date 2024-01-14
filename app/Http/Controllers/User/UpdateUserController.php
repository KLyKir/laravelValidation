<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateUserController extends Controller
{
    public function index($id){
        $user = User::findOrFail($id);
        return view('user.add_update', ['user' => $user]);
    }

    public function update(Request $request){
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'string'],
            'password' => ['required']
        ]);
        if($data){
            $user = User::query()->find($request->id);
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = $data['password'];
            $user->save();
            $users = User::get();
            return view('user.index', ['users' => $users]);
        }
    }

}
