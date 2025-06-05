@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Service</h1>

    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-2">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $service->title }}">
        </div>

        <div class="form-group mb-2">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $service->description }}</textarea>
        </div>

        <div class="form-group mb-2">
            <label>Button URL</label>
            <input type="url" name="button_url" class="form-control" value="{{ $service->button_url }}">
        </div>

        <div class="form-group mb-2">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            @if($service->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $service->image) }}" width="150">
                </div>
            @endif
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
