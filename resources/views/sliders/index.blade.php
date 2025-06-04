@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Sliders</h1>

    <a href="{{ route('sliders.create') }}" class="btn btn-primary mb-3">Create New Slider</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>SubTitle</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($sliders as $slider)
            <tr>
                <td>{{ $slider->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($slider->subtitle, 20) }}</td>
                <td>{{ \Illuminate\Support\Str::limit($slider->description, 50) }}</td>
                <td>
                    @if($slider->image)
                        <img src="{{ asset('storage/' . $slider->image) }}" alt="bg-img" width="100">
                    @else
                        N/A
                    @endif
                </td>
                <td>
                    <a href="{{ route('sliders.show', $slider->id) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" style="display:inline-block">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this slider?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="3">No sliders found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
