<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('layout');
        } else {
            return view('login');
        }
    }

    public function login(Request $request)
    {

        $request->validate([
	        'email' => 'required',
	        'password' => 'required',
	    ]);

        // Almacenamos las credenciales de email y contraseña
	    $credentials = $request->only('email', 'password');
	
	    // Si el usuario existe lo logamos y lo llevamos a la vista de "logados" con un mensaje
	    if (Auth::attempt($credentials)) {
	        return redirect()->intended('home')
	            ->withSuccess('Logueado correctamente');
	    }
	
	    // Si el usuario no existe devolvemos al usuario al formulario de login con un mensaje de error
	    return redirect("/")->withSuccess('Los datos introducidos no son correctos');
    }

    public function logueado()
    {
        if (Auth::check()) {
            return view('home');
        }
        return redirect('/')->withSuccess('No tienes acceso, por favor iniciar sesion');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
