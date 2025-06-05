@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit About Section</h1>

    <form action="{{ route('abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title', $about->title) }}" class="form-control" />
        </div>

        <div class="form-group mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description', $about->description) }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label>Icon Class</label>
            <input type="text" name="icon_class" value="{{ old('icon_class', $about->icon_class) }}" class="form-control" />
        </div>

        <div class="form-group mb-3">
            <label>Button Text</label>
            <input type="text" name="button_text" value="{{ old('button_text', $about->button_text) }}" class="form-control" />
        </div>

        <div class="form-group mb-3">
            <label>Button URL</label>
            <input type="text" name="button_url" value="{{ old('button_url', $about->button_url) }}" class="form-control" />
        </div>

        <div class="form-group mb-3">
            <label>Current Image</label><br/>
            @if($about->image)
                <img src="{{ asset('storage/' . $about->image) }}" alt="Image" width="120" />
            @else
                No image uploaded
            @endif
        </div>

        <div class="form-group mb-3">
            <label>Change Image</label>
            <input type="file" name="image" class="form-control" />
        </div>

        <div class="form-group mb-3">
            <label>Display Order</label>
            <input type="number" name="display_order" value="{{ old('display_order', $about->display_order) }}" class="form-control" />
        </div>

        <div class="form-group mb-3">
            <label>Extra Classes</label>
            <input type="text" name="extra_classes" value="{{ old('extra_classes', $about->extra_classes) }}" class="form-control" />
        </div>

        <button class="btn btn-primary" type="submit">Update</button>
        <a href="{{ route('abouts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
