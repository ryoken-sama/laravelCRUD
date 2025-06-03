@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Company</h1>
    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="logo">Logo (min: 100x100)</label>
            <input type="file" name="logo" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="website">Website</label>
            <input type="url" name="website" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
