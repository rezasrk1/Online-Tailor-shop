<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', ['reviews' => $reviews]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string',
        ]);

        // Check if a product picture was uploaded
        if ($request->hasFile('product_picture')) {
            $file = $request->file('product_picture');
            $path = $file->store('product_pictures', 'public'); // Store the uploaded file and get the path
        }

        Review::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'comment' => $request->input('comment'),
            'product_picture' => isset($path) ? $path : null, // Save the file path if it exists, or null if not uploaded
        ]);

        return redirect('/home')->with('success', 'Thank you for your review!');
    }
}


