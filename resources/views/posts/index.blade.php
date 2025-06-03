@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content (preview)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($post->content, 50) }}</td>
                <td>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline-block">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this post?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="3">No posts found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
