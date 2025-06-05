@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Services</h1>

    <a href="{{ route('services.create') }}" class="btn btn-primary mb-3">+ Add New Service</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Button URL</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $service->title }}</td>
                    <td>{{ Str::limit($service->description, 100) }}</td>
                    <td><a href="{{ $service->button_url }}" target="_blank">{{ $service->button_url }}</a></td>
                    <td>
                        @if($service->image)
                            <img src="{{ asset('storage/' . $service->image) }}" width="100">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('services.show', $service->id) }}" class="btn btn-sm btn-info">Show</a>
                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
