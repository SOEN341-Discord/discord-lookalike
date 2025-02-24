@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a New Channel</h1>

    <form action="{{ route('channels.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Channel Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection
