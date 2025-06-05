@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Testimonial</h1>
    <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="message">Message</label>
            <textarea name="message" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="image">Profile Picture</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
