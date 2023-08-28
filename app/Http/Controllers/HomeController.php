<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home1()
    {
        return view('home1'); // Replace 'home1' with the actual view name
    }

    public function index()
    {
        $title = 'Home'; // Set the title for the home page
        return view('home', compact('title'));
    }
}
