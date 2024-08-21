<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            // 'active' => true
        ]);

        // $remember = ($request->has('remember') ? true : false);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // EL intended es que el usuario inicie en la ruta que esta intentando entrar y es privada
            return redirect()->intended('dashboard');
        } else {
            return redirect('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('productos.index');
    }
}
