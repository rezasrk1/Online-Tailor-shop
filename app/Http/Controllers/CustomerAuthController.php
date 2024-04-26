<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerAuthController extends Controller
{
    public function showLoginForm(){
        $title = 'Login for customer';
        return view('customer.login', compact('title'));
    }
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::guard('customer')->attempt($credentials)) {
            // Authentication successful
            return redirect()->route('customer.home1'); // Redirect to customer dashboard
        } else {
            // Authentication failed
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }
    }
}
