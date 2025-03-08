@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Checkout</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0; @endphp
            @foreach($cartItems as $item)
            @php $subtotal = $item->price * $item->quantity; @endphp
            <tr>
                <td>{{ $item->product->name }}</td>
                <td>${{ number_format($item->price, 2) }}</td>
                <td>{{ $item->quantity }}</td>
                <td>${{ number_format($subtotal, 2) }}</td>
            </tr>
            @php $total += $subtotal; @endphp
            @endforeach
        </tbody>
    </table>

    <h4>Total: ${{ number_format($total, 2) }}</h4>

    <form action="{{ route('order.place') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="address" class="form-label">Shipping Address</label>
            <textarea name="address" id="address" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="payment_method" class="form-label">Payment Method</label>
            <select name="payment_method" id="payment_method" class="form-control" required>
                <option value="cod">Cash on Delivery</option>
                <option value="credit_card">Credit Card</option>
                <option value="paypal">PayPal</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Place Order</button>
    </form>
</div>
@endsection