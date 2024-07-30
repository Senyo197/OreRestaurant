@extends('layouts.ore')

@section('main-content')
    <div class="card">
        <div class="card-header">
            Edit Order
        </div>
        <div class="card-body">
            <form action="{{ route('ore.order.update', $order->id) }}" method="POST">
                @method('PUT')
                @csrf
                
                <!-- Customer -->
                <div class="form-group mb-3">
                    <label for="customer_id">Customer</label>
                    <select name="customer_id" id="customer_id" class="form-control" required>
                        @foreach($customers as $customer)
                            <option
                                value="{{ $customer->id }}" {{ $order->customer_id == $customer->id ? 'selected' : '' }}>
                                {{ $customer->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <!-- Product -->
                <div class="form-group mb-3">
                    <label for="product_id">Product</label>
                    <select name="product_id" id="product_id" class="form-control" required>
                        @foreach($products as $product)
                            <option
                                value="{{ $product->id }}" {{ $order->product_id == $product->id ? 'selected' : '' }}>
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <!-- Quantity -->
                <div class="form-group mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $order->quantity }}" required>
                </div>
                
                <!-- Order Date -->
                <div class="form-group mb-3">
                    <label for="order_date">Order Date</label>
                    <input type="date" name="order_date" id="order_date" class="form-control" value="{{ $order->order_date->format('Y-m-d') }}" required>
                </div>
                
                <!-- Status -->
                <div class="form-group mb-3">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                        <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                        <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>
                
                <!-- Total Price -->
                <div class="form-group mb-3">
                    <label for="total_price">Total Price</label>
                    <input type="number" step="0.01" name="total_price" id="total_price" class="form-control" value="{{ $order->total_price }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
