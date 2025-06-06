@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blog Details</h1>

    <ul class="list-group mb-4">
        <li class="list-group-item"><strong>Title:</strong> {{ $blog->title }}</li>

        <li class="list-group-item">
            <strong>Thumbnail:</strong>
            @if($blog->thumbnail)
                <div class="mt-2">
                    <img src="{{ Storage::url($blog->thumbnail) }}" alt="Thumbnail" width="200">
                </div>
            @else
                N/A
            @endif
        </li>

        <li class="list-group-item">
            <strong>Banner:</strong>
            @if($blog->banner)
                <div class="mt-2">
                    <img src="{{ Storage::url($blog->banner) }}" alt="Banner" width="200">
                </div>
            @else
                N/A
            @endif
        </li>

        <li class="list-group-item"><strong>Subtitle 1:</strong> {{ $blog->subtitle1 ?? 'N/A' }}</li>

        <li class="list-group-item">
            <strong>Description 1:</strong><br>
            <div class="mt-2">{{ $blog->description1 ?? 'N/A' }}</div>
        </li>

        <li class="list-group-item"><strong>Subtitle 2:</strong> {{ $blog->subtitle2 ?? 'N/A' }}</li>

        <li class="list-group-item">
            <strong>Description 2:</strong><br>
            <div class="mt-2">{{ $blog->description2 ?? 'N/A' }}</div>
        </li>

        <li class="list-group-item">
            <strong>Image:</strong>
            @if($blog->image)
                <div class="mt-2">
                    <img src="{{ Storage::url($blog->image) }}" alt="Image" width="200">
                </div>
            @else
                N/A
            @endif
        </li>

        <li class="list-group-item"><strong>Button Text:</strong> {{ $blog->button_text }}</li>
        <li class="list-group-item"><strong>Button URL:</strong> {{ $blog->button_url ?? 'N/A' }}</li>
        <li class="list-group-item"><strong>Display Order:</strong> {{ $blog->display_order ?? 'N/A' }}</li>
        <li class="list-group-item"><strong>Published:</strong> {{ $blog->is_published ? 'Yes' : 'No' }}</li>

        <li class="list-group-item"><strong>Created At:</strong> {{ $blog->created_at->format('Y-m-d H:i') }}</li>
        <li class="list-group-item"><strong>Updated At:</strong> {{ $blog->updated_at->format('Y-m-d H:i') }}</li>
    </ul>

    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('blogs.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
