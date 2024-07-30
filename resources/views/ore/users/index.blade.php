@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h4 style="margin: 0;">Users</h4>
{{--            <a href="{{ route('admin.categories.create') }}" class="btn btn-sm btn-primary">Create Category</a>--}}
        </div>

{{--        @if(session('success'))--}}
{{--            <div class="alert alert-success">--}}
{{--                {{ session('success') }}--}}
{{--            </div>--}}
{{--        @endif--}}
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Registered at</th>
                    {{--                    <th>Actions</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('d-m-Y') }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
