@extends('layouts.app')

@section('content')
<div class="container">
    <h1>About Details</h1>

    <div class="mb-3"><strong>Title:</strong> {{ $about->title }}</div>
    <div class="mb-3"><strong>Description:</strong> {!! nl2br(e($about->description)) !!}</div>
    <div class="mb-3"><strong>Icon Class:</strong> {{ $about->icon_class }}</div>
    <div class="mb-3"><strong>Button Text:</strong> {{ $about->button_text }}</div>
    <div class="mb-3"><strong>Button URL:</strong> <a href="{{ $about->button_url }}" target="_blank">{{ $about->button_url }}</a></div>
    <div class="mb-3">
        <strong>Image:</strong><br />
        @if($about->image)
            <img src="{{ asset('storage/' . $about->image) }}" alt="Image" style="max-width:300px;" />
        @else
            No image uploaded
        @endif
    </div>
    <div class="mb-3"><strong>Display Order:</strong> {{ $about->display_order }}</div>
    <div class="mb-3"><strong>Extra Classes:</strong> {{ $about->extra_classes }}</div>

    <a href="{{ route('abouts.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-warning">Edit</a>
</div>
@endsection
