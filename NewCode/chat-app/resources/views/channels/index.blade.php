@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Channels</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(auth()->user()->is_admin)
        <a href="{{ route('channels.create') }}" class="btn btn-primary mb-3">Create New Channel</a>
    @endif

    <ul class="list-group">
        @foreach ($channels as $channel)
            <li class="list-group-item d-flex justify-content-between">
                <div>
                    <strong>{{ $channel->name }}</strong> - {{ $channel->description }}
                </div>
                @if(auth()->user()->is_admin)
                    <form action="{{ route('channels.destroy', $channel->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                @endif
            </li>
        @endforeach
    </ul>
</div>
@endsection
