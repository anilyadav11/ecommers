<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .invoice-container {
            width: 100%;
            padding: 20px;
            border: 1px solid #ddd;
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .invoice-header img {
            width: 120px;
        }

        .invoice-details {
            width: 65%;
            text-align: left;
        }

        .invoice-logo {
            width: 35%;
            text-align: right;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        .total {
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="invoice-container">
        <!-- Header Section -->
        <div class="invoice-header">
            <!-- Order Details on the Left -->
            <div class="invoice-details">
                <p><strong>Order ID:</strong> {{ $orderdetail->id }}</p>
                <p><strong>Customer:</strong> {{ $orderdetail->user->name ?? 'Guest' }}</p>
                <p><strong>Date:</strong> {{ $orderdetail->created_at->format('d M, Y') }}</p>
                <p><strong>Status:</strong> {{ $orderdetail->status }}</p>
            </div>
            <!-- Logo on the Right -->
            <div class="invoice-logo">
                <img src="{{ public_path('uploads/setting/'.$settings->logo) }}" alt="Logo">
            </div>
        </div>

        <!-- Order Table -->
        <table>
            <thead>
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
                    <td colspan="3" class="total">Total Amount:</td>
                    <td>₹{{ number_format($totalAmount, 2) }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>

</html>