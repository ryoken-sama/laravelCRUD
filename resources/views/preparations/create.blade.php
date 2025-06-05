@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Preparation</h1>

    <form method="POST" action="{{ route('preparations.store') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="3" required></textarea>
        </div>

        <button class="btn btn-success">Save</button>
        <a href="{{ route('preparations.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
