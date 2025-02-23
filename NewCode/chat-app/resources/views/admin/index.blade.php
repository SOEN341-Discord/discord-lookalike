@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">User Management</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Admin</th>
                <th>Member</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->is_admin ? '✅' : '❌' }}</td>
                    <td>{{ $user->is_member ? '✅' : '❌' }}</td>
                    <td>
                        <form action="{{ route('admin.update', $user->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <input type="checkbox" name="is_admin" {{ $user->is_admin ? 'checked' : '' }}> Admin
                            <input type="checkbox" name="is_member" {{ $user->is_member ? 'checked' : '' }}> Member
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                        </form>
                        
                        <form action="{{ route('admin.destroy', $user->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
