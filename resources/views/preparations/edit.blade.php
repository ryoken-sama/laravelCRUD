@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Preparation</h1>

    <form method="POST" action="{{ route('preparations.update', $preparation->id) }}">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $preparation->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="5" required>{{ $preparation->content }}</textarea>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('preparations.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
