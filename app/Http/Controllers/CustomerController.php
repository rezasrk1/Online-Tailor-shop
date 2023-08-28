<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Buyer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title ="Customers";
        $customers =Buyer::get();
        return view('customers',compact('title','customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

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
        

        $notification = [
            'message' => "Customer has been added successfully!!",
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $customer = Customer::find($request->id);
        $customer->delete();
        $notification = array(
            'message'=>"Customer deleted successfully!!!",
            'alert-type'=>'success',
        );
        return back()->with($notification);
    }
}
