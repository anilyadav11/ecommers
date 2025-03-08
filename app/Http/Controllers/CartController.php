<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    // Add product to cart
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $user_id = Auth::id(); // Get logged-in user ID (or null for guests)
        $product = Product::find($request->product_id);

        // Check if the product is already in the cart
        $cart = Cart::where('user_id', $user_id)
            ->where('product_id', $product->id)
            ->first();

        if ($cart) {
            $cart->quantity += $request->quantity;
            $cart->save();
        } else {
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $product->id,
                'quantity' => $request->quantity,
                'price' => $product->price,
            ]);
        }

        return response()->json(['message' => 'Product added to cart successfully']);
    }

    // View Cart Items
    public function viewCart()
    {
        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->with('product')->get();

        return view('cart.view', compact('cartItems'));
    }

    // Remove Item from Cart
    public function removeFromCart(Request $request)
    {
        Cart::where('user_id', Auth::id())->where('product_id', $request->product_id)->delete();
        return response()->json(['message' => 'Product removed from cart']);
    }

    // Update Cart Quantity
    public function updateCart(Request $request)
    {
        $cart = Cart::where('user_id', Auth::id())->where('product_id', $request->product_id)->first();
        if ($cart) {
            $cart->quantity = $request->quantity;
            $cart->save();
        }

        return response()->json(['message' => 'Cart updated successfully']);
    }
}
