@extends('layouts.ore')

@section('main-content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">menu</h5>
                <p class="mb-0">{{$menu->count()}}</p>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Orders</h5>
                <p class="mb-0">{{$orders->count()}}</p>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Users</h5>
                <p class="mb-0">{{$users->count()}}</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h4 style="margin: 0;">Recently Added menu</h4>
            <a href="{{ route('ore.menu.index') }}" class="btn btn-sm btn-primary">View All</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Discounted</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($menu->take(5) as $menu)
                    <tr>
                        <td>{{ $menu->id }}</td>
                        <td>{{ $menu->name }}</td>
                        <td>{{ $menu->description }}</td>
                        <td>{{ $menu->price }}</td>
                        <td>{{ $menu->is_discounted ? 'Yes' : 'No' }}</td>
                        <td>{{ $menu->type }}</td>
                        <td>
                            <a href="{{ route('ore.menu.show', $menu->id) }}" class="btn btn-sm btn-info mb-2 mb-sm-0 mb-md-0 mb-lg-0 mb-xl-0 mb-xxl-0">View</a>
                            <a href="{{ route('ore.menu.edit', $menu->id) }}" class="btn btn-sm btn-primary mb-2 mb-sm-0 mb-md-0 mb-lg-0 mb-xl-0 mb-xxl-0">Edit</a>
                            <form action="{{ route('ore.menu.destroy', $menu->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this menu?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h4 style="margin: 0;">Recent Orders</h4>
            <a href="{{ route('ore.orders.index') }}" class="btn btn-sm btn-primary">View All</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Menu ID</th>
                    <th>Quantity</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders->take(5) as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user_id }}</td>
                        <td>{{ $order->menu_id }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->created_at->format('d-m-Y') }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
