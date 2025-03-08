<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CheckoutController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->with('product')->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.view')->with('error', 'Your cart is empty.');
        }

        return view('checkout.index', compact('cartItems'));
    }
}
