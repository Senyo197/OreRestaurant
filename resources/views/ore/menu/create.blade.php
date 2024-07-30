@extends('layouts.ore')

@section('main-content')
<div class="container">
    <h1>Create Menu</h1>
    <form action="{{ route('ore.menu.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
        </div>

        <div class="form-group">
            <label for="is_discounted">Discounted</label>
            <select name="is_discounted" id="is_discounted" class="form-control" required>
                <option value="1" {{ old('is_discounted') == '1' ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('is_discounted') == '0' ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <select class="form-control" id="type" name="type">
                <option value="">Select Type</option>
                <option value="food" {{ old('type') == 'food' ? 'selected' : '' }}>Food</option>
                <option value="drink" {{ old('type') == 'drink' ? 'selected' : '' }}>Drink</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Menu</button>
    </form>
</div>
@endsection
