@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Slider</h1>
    <form method="POST" action="{{ route('sliders.update', $slider->id) }}" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="form-group mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $slider->title}}">
        </div>
        <div class="form-group mb-3">
            <label for="subtitle" class="form-label">SubTitle</label>
            <textarea name="subtitle" rows="3"class="form-control">{{ $slider->subtitle }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" rows="5" class="form-control">{{ $slider->description }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="image">Background-Image</label>
            <input type="file" name="image" class="form-control">
            @if ($slider->image)
                <p>Current image: <img src="{{ asset('storage/' . $slider->image) }}" width="150"></p>
            @endif

        </div>
        <div class="form-group mb-3">
            <label for="button_text">Button Text</label>
            <input type="text" name="button_text" class="form-control" value="{{ $slider->button_text }}">
        </div>
        <div class="form-group mb-3">
            <label for="button_url">Button URL</label>
            <input type="url" name="button_url" class="form-control" value="{{ $slider->button_url }}">
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('sliders.index') }}" class="btn btn-danger">Cancel</a>
    </form>
</div>
@endsection
