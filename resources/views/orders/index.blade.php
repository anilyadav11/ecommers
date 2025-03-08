@extends('user.app')

@section('content')

<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-lg-10 col-md-8 ml-auto">
            <div class="row align-items-center">
                <!-- First Table -->
                <div class="col-12 col-xl-12 mb-4 mb-xl-0">
                    <h4 class="text-muted text-center mb-3">All Orders</h4>
                    <table class="table bg-light table-hover table-striped  text-center display" id="allorders">
                        <thead>
                            <tr class="text-muted">
                                <th>#SL</th>
                                <th>Order No.</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <th>{{ $order->id }}</th>
                                <td>{{ $order->id }}</td>
                                <td>
                                    <ul>
                                        @foreach($order->items as $item)
                                        <li>{{ $item->product->name }} (x{{ $item->quantity }}) - ${{ number_format($item->price, 2) }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>${{ number_format($order->total_price, 2) }}</td>
                                <td><span class="badge badge-success w-60 py-2">{{ $order->status }}</span></td>
                                <td>
                                    <a href="{{ route('orders.details', $order->id) }}" class="btn btn-primary btn-sm">View</a>
                                    <div class="text-center mt-4">

                                        <a href="{{ route('invoice.download', $order->id) }}" class="btn btn-primary px-4">Download Invoice</a>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- Second Table -->

            </div>
        </div>
    </div>
</div>



@endsection