@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>

    <div class="mb-4">
        <p>{{ $post->content }}</p>
    </div>

    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
