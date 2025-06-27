<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        if ($user->role == 1) {
            return redirect()->route(''); // Hay que definir estas vistas
        } elseif ($user->role == 2) {
            return redirect()->route(''); // Hay que definir estas vistas
        }

        return redirect()->route('inicio');
    }

    return back()->withErrors(['error' => 'Credenciales incorrectas']);
}


    public function logout()
    {
        Auth::logout();
        return redirect()->route('inicio');
    }
}

