<?php

namespace App\Http\Controllers\CustomerAuth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Adminfront extends Controller
{
    function Customerlogin(){
        return view('backend/customer_front');
    }

    public function loginCustomer(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        if(Auth::guard('buyer')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/customer/dashboard');
        }else{
            return redirect()->back()->with('error-msg', 'Your email or password is invalid');
        }
    }

    public function showRegistrationForm(){
        return view('backend/registration');
    }

}
