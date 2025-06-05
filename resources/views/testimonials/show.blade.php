@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Testimonial Details</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>Name:</strong> {{ $testimonial->name }}</li>
        <li class="list-group-item"><strong>Message:</strong>{{ $testimonial->message}}</li>
        <li class="list-group-item">
            <strong>Profile Picture</strong>
            @if($testimonial->image)
                <img src="{{ Storage::url($testimonial->image) }}" alt="bg-img" width="100">
            @else
                N/A
            @endif
        </li>
    </ul>
    <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('testimonials.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
