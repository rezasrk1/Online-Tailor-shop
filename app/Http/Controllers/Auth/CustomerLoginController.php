<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Customers;

class CustomerLoginController extends Controller
{
    public function showLoginForm(){
        $title = 'Login for customer';
        return view('customer.login', compact('title'));
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('customer')->attempt($credentials, $request->remember)) {
            return redirect()->route('home1'); // Change this route as needed
        } else {
            return back()->with('loginError', "Invalid User Credentials");
        }
    }
}

