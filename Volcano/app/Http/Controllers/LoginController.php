<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    public function show()
    {
        return view('dashboard.login');
    }
    public function login()
    {
        validator(request()->all(), [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ])->validate();

        if (auth()->attempt(request()->only(['email', 'password']))) {
            return redirect()->route('dashboard');
        }
        return redirect()->back()->withErrors(['email' => 'invalid email', 'password' => 'invalid password']);
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('index');
    }
}
