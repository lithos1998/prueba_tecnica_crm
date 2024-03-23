<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
	{
	    if (Auth::check()) {
            // User autenticado
            return redirect('/clientes');
	    }
        
        // User no autenticado
        return view('login.index');
	}

    public function login(LoginUserRequest $request)
	{
	    $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Validacion correcta
            request()->session()->regenerate();
            
            return redirect('/clientes');
        }

        // Credenciales invalidas
        return back()->with('invalidate', 'El mail o la contraseña son incorrectos');
	}


    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
