<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function list() {
        $users = User::all();
        return view('courses', compact('users'));
    }

    public function store(Request $request) {
        $user = User::create(
            [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]
        );
        
        return redirect('list');
    }
}
