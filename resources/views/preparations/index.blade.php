@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Preparations</h1>

    <a href="{{ route('preparations.create') }}" class="btn btn-primary mb-3">Create New Preparation</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($preparations as $preparation)
            <tr>
                <td>{{ $preparation->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($preparation->content, 50) }}</td>
                <td>
                    <a href="{{ route('preparations.show', $preparation->id) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('preparations.edit', $preparation->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('preparations.destroy', $preparation->id) }}" method="POST" style="display:inline-block">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this preparation?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="3">No preparations found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
