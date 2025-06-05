@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Testimonials</h1>

    <a href="{{ route('testimonials.create') }}" class="btn btn-primary mb-3">Create New Testimonial</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Message</th>
                <th>Profile Picture</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($testimonials as $testimonial)
            <tr>
                <td>{{ $testimonial->name }}</td>
                <td>{{ \Illuminate\Support\Str::limit($testimonial->message, 50) }}</td>
                <td>
                    @if($testimonial->image)
                        <img src="{{ asset('storage/' . $testimonial->image) }}" alt="bg-img" width="100">
                    @else
                        N/A
                    @endif
                </td>
                <td>
                    <a href="{{ route('testimonials.show', $testimonial->id) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline-block">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this testimonial?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="3">No testimonials found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
