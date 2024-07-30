@extends('layouts.ore')

@section('main-content')
    <div class="card">
        <div class="card-header">
            Order Details
        </div>
        <div class="card-body">
            <p><strong>Customer:</strong> {{ $order->customer->name }}</p>
            <p><strong>Product:</strong> {{ $order->product->name }}</p>
            <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
            <p><strong>Order Date:</strong> {{ $order->order_date->format('d-m-Y H:i:s') }}</p>
            <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
            <p><strong>Total Price:</strong> ${{ number_format($order->total_price, 2) }}</p>

            <a href="{{ route('ore.order.edit', $order->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('ore.order.destroy', $order->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
            </form>
        </div>
    </div>
@endsection
