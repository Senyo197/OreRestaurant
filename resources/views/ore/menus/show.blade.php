@extends('layouts.ore')

@section('main-content')
<div class="container">
    <h1>menus Details</h1>
    <div class="card mb-3">
        <div class="card-header">
            <h2>{{ $menus->name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $menus->description }}</p>
            <p><strong>Price:</strong> ${{ number_format($menus->price, 2) }}</p>
            <p><strong>Discounted:</strong> {{ $menus->is_discounted ? 'Yes' : 'No' }}</p>
            <p><strong>Type:</strong> {{ ucfirst($menus->type) }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('ore.menus.edit', $menus->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('ore.menus.destroy', $menus->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this menus item?')">Delete</button>
            </form>
        </div>
    </div>
    <a href="{{ route('ore.menus.index') }}" class="btn btn-secondary">Back to menus</a>
</div>
@endsection
