@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Blog</h1>
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="thumbnail">thumbnail</label>
            <input type="file" name="thumbnail" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="banner">Banner</label>
            <input type="file" name="banner" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="subtitle1">Subtitle 1</label>
            <input type="text" name="subtitle1" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="description1">Description 1</label>
            <textarea name="description1" rows="4" class="form-control"></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="subtitle2">Subtitle 2</label>
            <input type="text" name="subtitle2" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="description2">Description 2</label>
            <textarea name="description2" rows="4" class="form-control"></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="button_text">Button Text</label>
            <input type="text" name="button_text" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="button_url">Button URL</label>
            <input type="text" name="button_url" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="display_order">Display Order</label>
            <input type="number" name="display_order" class="form-control">
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="is_published" id="is_published" class="form-check-input" value="1" {{ old('is_published') ? 'checked' : '' }}>
            <label class="form-check-label" for="is_published">Publish</label>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
