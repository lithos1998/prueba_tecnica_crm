<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
	{
	    if (Auth::check()) {
            // User autenticado
            return view('users.index');
	    }
        
        // User no autenticado
        return view('login');
	}

    public function login()
	{
	    $credentials = request()->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Validacion correcta
            request()->session()->regenerate();
            
            return redirect('users')->withSuccess('Bienvendio nombre');
        }
        
        // Credenciales invalidas
        return redirect('/')->withSuccess('Email o contraseña invalidos');
	}


    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
