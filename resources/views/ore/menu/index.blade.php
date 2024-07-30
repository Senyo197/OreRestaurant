@extends('layouts.ore')

@section('main-content')
<div class="container">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h4 style="margin: 0;">menu</h4>
        <a href="{{ route('ore.menu.create') }}" class="btn btn-sm btn-primary">Create Menu</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Discounted</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menu as $menu)
                    <tr>
                        <td><a href="{{ route('ore.menu.show', $menu->id) }}">{{ $menu->name }}</a></td>
                        <td>{{ $menu->description }}</td>
                        <td>${{ number_format($menu->price, 2) }}</td>
                        <td>{{ $menu->is_discounted ? 'Yes' : 'No' }}</td>
                        <td>{{ ucfirst($menu->type) }}</td>
                        <td>
                            <a href="{{ route('ore.menu.edit', $menu->id) }}" class="btn btn-warning mb-2 mb-sm-0 mb-md-0 mb-lg-0 mb-xl-0 mb-xxl-0">Edit</a>
                            <form action="{{ route('ore.menu.destroy', $menu->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this menu item?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
