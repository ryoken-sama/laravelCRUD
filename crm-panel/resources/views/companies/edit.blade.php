@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Company</h1>
    <form action="{{ route('companies.update', $company) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $company->name }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $company->email }}">
        </div>
        <div class="form-group mb-3">
            <label for="logo">Logo (min: 100x100)</label>
            <input type="file" name="logo" class="form-control">
            @if($company->logo)
                <img src="{{ Storage::url($company->logo) }}" alt="Logo" width="100" class="mt-2">
            @endif
        </div>
        <div class="form-group mb-3">
            <label for="website">Website</label>
            <input type="url" name="website" class="form-control" value="{{ $company->website }}">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
