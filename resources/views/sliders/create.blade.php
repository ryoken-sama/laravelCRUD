@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Slider</h1>
    <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="subtitle">SubTitle</label>
            <textarea name="subtitle" rows="3"class="form-control"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="image">Background-Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="button_text">Button Text</label>
            <input type="text" name="button_text" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="button_url">Button URL</label>
            <input type="url" name="button_url" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('sliders.index') }}" class="btn btn-secondary">Cancel</a>

    </form>
</div>
@endsection
