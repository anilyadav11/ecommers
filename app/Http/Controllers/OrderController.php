<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\order_item;
use App\Models\Cart;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::all();
        return view('orders.index', compact('order'));
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'payment_method' => 'required|in:cod,credit_card,paypal',
        ]);

        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->with('product')->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.view')->with('error', 'Your cart is empty.');
        }

        $total_price = $cartItems->sum(fn($item) => $item->price * $item->quantity);

        // Create the Order with address and payment method
        $order = Order::create([
            'user_id' => $user_id,
            'total_price' => $total_price,
            'status' => 'Pending',
            'address' => $request->address,
            'payment_method' => $request->payment_method,
        ]);

        // Add items to the order
        foreach ($cartItems as $item) {
            order_item::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->price,
            ]);
        }

        // Clear Cart after order placement
        Cart::where('user_id', $user_id)->delete();


        return redirect()->route('orders.view')->with('success', 'Order placed successfully!');
    }


    public function viewOrders()
    {
        $orders = Order::where('user_id', Auth::id())->with('items.product')->get();
        return view('orders.index', compact('orders'));
    }

    public function viewOrdersDetails($id)
    {
        $orderdetail = Order::with('items.product')->find($id);
        return view('orders.orderdetails', compact('orderdetail'));
    }
}
