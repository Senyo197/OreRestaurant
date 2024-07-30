@extends('layouts.ore')

@section('main-content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h4 style="margin: 0;">order</h4>
                <a href="{{ route('ore.order.create') }}" class="btn btn-sm btn-primary">Create Order</a>
            </div>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Order Date</th>
                            <th>Status</th>
                            <th>Total Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->customer->name }}</td>
                                <td>{{ $order->product->name }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->order_date->format('d-m-Y') }}</td>
                                <td>{{ ucfirst($order->status) }}</td>
                                <td>${{ number_format($order->total_price, 2) }}</td>
                                <td>
                                    <a href="{{ route('ore.order.show', $order->id) }}" class="btn btn-sm btn-info mb-2 mb-sm-0 mb-md-0 mb-lg-0 mb-xl-0 mb-xxl-0">View</a>
                                    <a href="{{ route('ore.order.edit', $order->id) }}" class="btn btn-sm btn-primary mb-2 mb-sm-0 mb-md-0 mb-lg-0 mb-xl-0 mb-xxl-0">Edit</a>
                                    <form action="{{ route('ore.order.destroy', $order->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
