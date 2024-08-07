<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string|min:4|max:12',
        ]);

        $users = $request->only('email', 'password');
        return view('index', ['users' => (object) $users]);
    }

    public function logout()
    {
        return redirect('/login');
    }
}
