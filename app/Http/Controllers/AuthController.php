<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; // Make sure this import is present
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Other methods...
    
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/home');
        } else {
            // Authentication failed...
            return redirect()->route('login')->withErrors(['message' => 'Invalid credentials']);
        }
    }

    // Other methods...
}

