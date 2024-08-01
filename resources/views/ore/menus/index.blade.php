@extends('layouts.ore')

@section('main-content')
<div class="container">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h4 style="margin: 0;">menus</h4>
        <a href="{{ route('ore.menus.create') }}" class="btn btn-sm btn-primary">Create menus</a>
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
                @foreach($menus as $menus)
                    <tr>
                        <td><a href="{{ route('ore.menus.show', $menus->id) }}">{{ $menus->name }}</a></td>
                        <td>{{ $menus->description }}</td>
                        <td>${{ number_format($menus->price, 2) }}</td>
                        <td>{{ $menus->is_discounted ? 'Yes' : 'No' }}</td>
                        <td>{{ ucfirst($menus->type) }}</td>
                        <td>
                            <a href="{{ route('ore.menus.edit', $menus->id) }}" class="btn btn-warning mb-2 mb-sm-0 mb-md-0 mb-lg-0 mb-xl-0 mb-xxl-0">Edit</a>
                            <form action="{{ route('ore.menus.destroy', $menus->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this menus item?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
