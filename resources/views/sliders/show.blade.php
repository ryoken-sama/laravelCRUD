@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Slider Details</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>Title:</strong> {{ $slider->title }}</li>
        <li class="list-group-item"><strong>SubTitle:</strong>{{ $slider->subtitle}}</li>
        <li class="list-group-item"><strong>Description:</strong>{{ $slider->description}}</li>
        <li class="list-group-item">
            <strong>Background Image:</strong>
            @if($slider->image)
                <img src="{{ Storage::url($slider->image) }}" alt="bg-img" width="100">
            @else
                N/A
            @endif
        </li>
        <li class="list-group-item"><strong>Button Text:</strong>{{ $slider->button_text}}</li>
        <li class="list-group-item"><strong>Button Link:</strong>{{ $slider->button_link}}</li>
    </ul>
    <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('sliders.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
