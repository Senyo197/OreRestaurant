@extends('layouts.ore')

@section('main-content')
    <div class="card">
        <div class="card-header">
            Create Order
        </div>
        @if ($errors->any())
            <div class="alert alert-danger mb-3 mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">
            <form action="{{ route('ore.order.store') }}" method="POST">
                @csrf
                
                <!-- Customer -->
                <div class="form-group mb-3">
                    <label for="customer_id">Customer</label>
                    <select name="customer_id" id="customer_id" class="form-control" required>
                        <option value="">Select Customer</option>
                        @foreach($customers as $customer)
                            <option value="{{ $customer->id }}" {{ old('customer_id') == $customer->id ? 'selected' : '' }}>
                                {{ $customer->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <!-- Product -->
                <div class="form-group mb-3">
                    <label for="product_id">Product</label>
                    <select name="product_id" id="product_id" class="form-control" required>
                        <option value="">Select Product</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <!-- Quantity -->
                <div class="form-group mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" value="{{ old('quantity') }}" required>
                </div>
                
                <!-- Order Date -->
                <div class="form-group mb-3">
                    <label for="order_date">Order Date</label>
                    <input type="date" name="order_date" id="order_date" class="form-control" value="{{ old('order_date') }}" required>
                </div>
                
                <!-- Status -->
                <div class="form-group mb-3">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="">Select Status</option>
                        <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="shipped" {{ old('status') == 'shipped' ? 'selected' : '' }}>Shipped</option>
                        <option value="delivered" {{ old('status') == 'delivered' ? 'selected' : '' }}>Delivered</option>
                        <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>
                
                <!-- Total Price -->
                <div class="form-group mb-3">
                    <label for="total_price">Total Price</label>
                    <input type="number" step="0.01" name="total_price" id="total_price" class="form-control" value="{{ old('total_price') }}" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
