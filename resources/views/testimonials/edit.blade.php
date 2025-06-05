@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit Testimonial</h1>
    <form method="POST" action="{{ route('testimonials.update', $testimonial->id) }}" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="form-group mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $testimonial->name}}">
        </div>
        <div class="form-group mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" rows="5" class="form-control">{{ $testimonial->message }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="image">Profile Picture</label>
            <input type="file" name="image" class="form-control">
            @if ($testimonial->image)
                <p>Current image: <img src="{{ asset('storage/' . $testimonial->image) }}" width="150"></p>
            @endif
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('testimonials.index') }}" class="btn btn-danger">Cancel</a>
    </form>
</div>
@endsection
