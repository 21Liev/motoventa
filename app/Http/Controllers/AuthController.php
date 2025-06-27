<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


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
                return redirect()->route(''); // Hay que definir estas vistas en caso de que se redirija a diferentes lugares
            } elseif ($user->role == 2) {
                return redirect()->route('');
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

    public function showRegister()
    {
        return view('auth.registro'); // o el nombre que tenga tu formulario
    }
    public function registrarse(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:4|confirmed'

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 2, // rol predeterminado cliente
        ]);

        Auth::login($user);

        return redirect()->route('inicio')->with('success', 'Registro exitoso, bienvenido!');
    }
}
