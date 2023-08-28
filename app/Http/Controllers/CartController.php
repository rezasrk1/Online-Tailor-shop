<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'product_id' => 'required|numeric',
            'quantity' => 'required|integer|min:1',
        ]);

        // Get the authenticated user or guest user if not logged in
        $user = Auth::user() ?: null;

        // Find or create the cart entry for the user and product
        $cartItem = Cart::updateOrCreate(
            [ 'user_id' => $user ? $user->id : null, 'product_id' => $request->product_id],
            ['quantity' => $request->quantity]
        );

        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }
}
