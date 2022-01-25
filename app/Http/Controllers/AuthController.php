<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function attemptLogin(Request $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $user = Auth::attempt($login);

        /* if $user is false (invalid credentials) */
        if(!$user)
        {
            return redirect()->route('auth.login');
        }

        return redirect()->route('dashboard');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function attemptRegister()
    {

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
