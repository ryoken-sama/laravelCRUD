@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Blog</h1>
    <form method="POST" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}">
        </div>

        <div class="form-group mb-3">
            <label for="thumbnail" class="form-label">Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control">
            @if ($blog->thumbnail)
                <p>Current thumbnail:</p>
                <img src="{{ asset('storage/' . $blog->thumbnail) }}" width="150">
            @endif
        </div>

        <div class="form-group mb-3">
            <label for="banner" class="form-label">Banner</label>
            <input type="file" name="banner" class="form-control">
            @if ($blog->banner)
                <p>Current banner:</p>
                <img src="{{ asset('storage/' . $blog->banner) }}" width="150">
            @endif
        </div>

        <div class="form-group mb-3">
            <label for="subtitle1" class="form-label">Subtitle 1</label>
            <input type="text" name="subtitle1" class="form-control" value="{{ old('subtitle1', $blog->subtitle1) }}">
        </div>

        <div class="form-group mb-3">
            <label for="description1" class="form-label">Description 1</label>
            <textarea name="description1" class="form-control" rows="4">{{ old('description1', $blog->description1) }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="subtitle2" class="form-label">Subtitle 2</label>
            <input type="text" name="subtitle2" class="form-control" value="{{ old('subtitle2', $blog->subtitle2) }}">
        </div>

        <div class="form-group mb-3">
            <label for="description2" class="form-label">Description 2</label>
            <textarea name="description2" class="form-control" rows="4">{{ old('description2', $blog->description2) }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
            @if ($blog->image)
                <p>Current image:</p>
                <img src="{{ asset('storage/' . $blog->image) }}" width="150">
            @endif
        </div>

        <div class="form-group mb-3">
            <label for="button_text" class="form-label">Button Text</label>
            <input type="text" name="button_text" class="form-control" value="{{ old('button_text', $blog->button_text) }}">
        </div>

        <div class="form-group mb-3">
            <label for="button_url" class="form-label">Button URL</label>
            <input type="text" name="button_url" class="form-control" value="{{ old('button_url', $blog->button_url) }}">
        </div>

        <div class="form-group mb-3">
            <label for="display_order" class="form-label">Display Order</label>
            <input type="number" name="display_order" class="form-control" value="{{ old('display_order', $blog->display_order) }}">
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="is_published" id="is_published" class="form-check-input" value="1"
                {{ old('is_published', $blog->is_published) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_published">Publish</label>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('blogs.index') }}" class="btn btn-danger">Cancel</a>
    </form>
</div>
@endsection
