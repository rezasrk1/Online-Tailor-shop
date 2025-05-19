<?php

namespace App\Http\Controllers\CustomerAuth;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerBack extends Controller
{
    function Dashboard(){
        return view('backend/customer_dashboard');
    }


    public function logout(){
        Auth::guard('buyer')->logout();
    
        return redirect('/'); // Redirect to your desired page after logout.
    }

    public function register(Request $request){
        dd($request->all());
        // Validation rules for the registration form fields
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:buyers',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new Buyer instance and save it to the database
        Buyer::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        return redirect('/customer/login');

        // You can add a flash message to notify the user that registration was successful.
        // For example:
        // session()->flash('success', 'Registration successful. You can now log in.');

        // return redirect('/customer/login'); // Redirect to the buyer login page after registration.
}

 public function Dashboard_catr($id){
    $product_all = Product::findOrfail($id);
    return view('backend/showcart', compact('product_all'));
 }


    
}
