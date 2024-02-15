<?php

namespace App\Http\Controllers\CustomerAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $title ="login";
        return view('customerlaravel.auth.login',compact('title'));
    }

    public function login(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
        ]);
        
        $authenticate =auth()->attempt($request->only('username','password'),$request->remember);
        if (!$authenticate){
            return back()->with('loginError',"Invalid User Credentials");
        }
        return redirect()->route('customer.dashboard');

    }
}
