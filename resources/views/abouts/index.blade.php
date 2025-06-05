@extends('layouts.app')

@section('content')
<div class="container">
    <h1>About Sections</h1>
    <a href="{{ route('abouts.create') }}" class="btn btn-primary mb-3">Create New About</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Icon Class</th>
                <th>Button Text</th>
                <th>Button URL</th>
                <th>Image</th>
                <th>Display Order</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($abouts as $about)
                <tr>
                    <td>{{ $about->title }}</td>
                    <td>{{ Str::limit($about->description, 50) }}</td>
                    <td>{{ $about->icon_class }}</td>
                    <td>{{ $about->button_text }}</td>
                    <td>{{ $about->button_url }}</td>
                    <td>
                        @if($about->image)
                            <img src="{{ asset('storage/' . $about->image) }}" alt="Image" width="80" />
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $about->display_order }}</td>
                    <td>
                        <a href="{{ route('abouts.show', $about->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('abouts.destroy', $about->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete this about?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
