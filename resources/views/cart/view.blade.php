@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Shopping Cart</h2>
    @if($cartItems->count() > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
            <tr>
                <td>{{ $item->product->name }}</td>
                <td>${{ number_format($item->price, 2) }}</td>
                <td>
                    <input type="number" value="{{ $item->quantity }}" min="1" class="cart-quantity" data-id="{{ $item->product_id }}">
                </td>
                <td>${{ number_format($item->price * $item->quantity, 2) }}</td>
                <td>
                    <button class="btn btn-danger remove-from-cart" data-id="{{ $item->product_id }}">Remove</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('checkout') }}" class="btn btn-primary">Proceed to Checkout</a>
    @else
    <p>Your cart is empty.</p>
    @endif
</div>

<script>
    document.querySelectorAll(".remove-from-cart").forEach(button => {
        button.addEventListener("click", function() {
            let productId = this.dataset.id;

            fetch("{{ route('cart.remove') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        product_id: productId
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                    location.reload();
                });
        });
    });

    document.querySelectorAll(".cart-quantity").forEach(input => {
        input.addEventListener("change", function() {
            let productId = this.dataset.id;
            let quantity = this.value;

            fetch("{{ route('cart.update') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        product_id: productId,
                        quantity: quantity
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                    location.reload();
                });
        });
    });
</script>
@endsection