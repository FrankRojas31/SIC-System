<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
	{
	    if (Auth::check()) {

	        return view('logados');
	    }

	    return view('login');
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
	        return redirect()->intended('logados')
	            ->withSuccess('Logado Correctamente');
	    }

	    // Si el usuario no existe devolvemos al usuario al formulario de login con un mensaje de error
	    return redirect("/")->withSuccess('Los datos introducidos no son correctos');
	}
}
