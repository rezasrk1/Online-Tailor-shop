<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Customers;

class Customer1Controller extends Controller
{
    public function home1()
    {
        if (Auth::guard('customer')->check()) {
            return view('layouts.customer', [
                'content' => view('customer.home1')
            ]);
        } else {
            // Handle the case where the user is not authenticated
            // For example, you might want to redirect them to the login page
            return redirect()->route('customer-login');
        }
    }
    


    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('customer-login');
    }

    public function __construct()
    {
        $this->middleware('guest:customer')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard('customer');
    }
    public function showLoginForm()
    {
        $title = 'Login for customer';
        return view('customer.login', compact('title'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return view('customer.home1');
            // return redirect()->route('home1');
        }

        $notification = array(
            'message' => "Login failed. Please check your credentials.",
            'alert-type' => 'error',
        );
        return back()->with($notification);
    }

    public function showRegistrationForm()
    {
        $title = 'Register for customer';
        return view('customer.registration', compact('title'));
    }

    public function register(Request $request)
    {
        // $this->validate($request, [
        //     'fullname' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:customers',
        //     'phone' => 'required|string|max:15',
        //     'address' => 'required|string|max:255',
        //     'gender' => 'required|in:Male,Female',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);

        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'phone' => 'required|string|max:20|unique:customers',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'comment' => 'nullable|string',
            'gender' => 'required|in:Male,Female', // Add this line
        ]);

        $this->validate($request, [
            'gender' => 'required|in:Male,Female',
        ]);


         // Create a new Customer instance
         $customer = new Customer();
         $customer->fullname = $request->input('fullname');
         $customer->address = $request->input('address');
         $customer->phone = $request->input('phone');
         $customer->city = $request->input('city');
         $customer->email = $request->input('email');
         $customer->password = bcrypt($request->input('password'));
         $customer->comment = $request->input('comment');
         $customer->gender = $request->input('gender');


        // $customer = new Customer();
        // $customer->fullname = $request->input('fullname');
        // $customer->address = $request->input('address');
        // $customer->phone = $request->input('phone');
        // $customer->email = $request->input('email');
        // $customer->password = bcrypt($request->input('password'));
        // ... Set other fields ...

        $customer->save();
        // Validate input
        $validatedData = $request->validate([
            // Your validation rules here
        ]);

        // Create and save the Customer model
        $customer = Customer::create($validatedData);

        // Log the customer in
        auth()->guard('customer')->login($customer);

        // Redirect to a success page or dashboard
        return redirect()->route('home1');

        Auth::login($customer);

        $notification = array(
            'message' => "Registration successful! You are now logged in.",
            'alert-type' => 'success',
        );
        return redirect()->route('home1')->with($notification);
    }
}
