@extends('user.app')

@section('content')
@php
$settings = App\Models\Setting::first();
@endphp

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Invoice</h4>
                </div>
                <div class="card-body p-4">
                    @if ($orderdetail)
                    <div class="row mb-4 align-items-center">
                        <div class="col-md-4 text-md-left text-center">
                            <h5><strong>Order ID:</strong> {{ $orderdetail->id }}</h5>
                            <h5><strong>Customer:</strong> {{ $orderdetail->user->name ?? 'Guest' }}</h5>
                            <h5><strong>Date:</strong> {{ $orderdetail->created_at->format('d M, Y') }}</h5>
                            <h5><strong>Status:</strong> <span class="badge bg-success">{{ $orderdetail->status }}</span></h5>
                        </div>
                        <div class="col-md-4 text-center">
                            <h5><strong>Invoice Date:</strong> {{ now()->format('d M, Y') }}</h5>
                        </div>
                        <div class="col-md-4 text-md-right text-center">
                            <img src="{{ asset('uploads/setting/'.$settings->logo) }}" alt="Logo" width="100px" class="img-fluid">
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead class="bg-light">
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $totalAmount = 0; @endphp
                                @foreach ($orderdetail->items as $item)
                                @php
                                $subtotal = $item->quantity * ($item->product->price ?? 0);
                                $totalAmount += $subtotal;
                                @endphp
                                <tr>
                                    <td>{{ $item->product->name ?? 'N/A' }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>₹{{ number_format($item->product->price ?? 0, 2) }}</td>
                                    <td>₹{{ number_format($subtotal, 2) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="3" class="text-right">Total Amount:</th>
                                    <th>₹{{ number_format($totalAmount, 2) }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="text-center mt-4">
                        <button class="btn btn-success px-4" onclick="printInvoice()">Print Invoice</button>
                    </div>
                    @else
                    <p class="text-center text-danger">Order not found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function printInvoice() {
        window.print();
    }
</script>
@endsection