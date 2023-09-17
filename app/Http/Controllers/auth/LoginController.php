<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store(Request $request)
    {

        // Se intenta autenticar al usuario
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('message', 'Las credenciales son incorrectas');
        }

        return redirect()->route('products');
    }
}
