@extends('layouts.ore')

@section('main-content')
<div class="container">
    <h1>Menu Details</h1>
    <div class="card mb-3">
        <div class="card-header">
            <h2>{{ $menu->name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $menu->description }}</p>
            <p><strong>Price:</strong> ${{ number_format($menu->price, 2) }}</p>
            <p><strong>Discounted:</strong> {{ $menu->is_discounted ? 'Yes' : 'No' }}</p>
            <p><strong>Type:</strong> {{ ucfirst($menu->type) }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('ore.menu.edit', $menu->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('ore.menu.destroy', $menu->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this menu item?')">Delete</button>
            </form>
        </div>
    </div>
    <a href="{{ route('ore.menu.index') }}" class="btn btn-secondary">Back to menu</a>
</div>
@endsection
