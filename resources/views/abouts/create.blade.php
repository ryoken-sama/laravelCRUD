@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create About Section</h1>
    <form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control" />
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="icon_class">Icon Class</label>
            <input type="text" name="icon_class" value="{{ old('icon_class') }}" class="form-control" />
        </div>

        <div class="form-group mb-3">
            <label for="button_text">Button Text</label>
            <input type="text" name="button_text" value="{{ old('button_text') }}" class="form-control" />
        </div>

        <div class="form-group mb-3">
            <label for="button_url">Button URL</label>
            <input type="text" name="button_url" value="{{ old('button_url') }}" class="form-control" />
        </div>

        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" />
        </div>

        <div class="form-group mb-3">
            <label for ="display_order">Display Order</label>
            <input type="number" name="display_order" value="{{ old('display_order') }}" class="form-control" />
        </div>

        <div class="form-group mb-3">
            <label for ="extra_classes">Extra Classes</label>
            <input type="text" name="extra_classes" value="{{ old('extra_classes') }}" class="form-control" />
        </div>

        <button class="btn btn-success" type="submit">Save</button>
        <a href="{{ route('abouts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
