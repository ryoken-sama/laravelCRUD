@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Dashboard</h1>
    <div class="d-flex gap-3 mt-3">
        
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Manage Posts</a>
        <a href="{{ route('sliders.index') }}" class="btn btn-secondary">Manage Sliders</a>
        <a href="{{ route('preparations.index') }}" class="btn btn-secondary">Manage Preparations</a>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Manage Services</a>
        <a href="{{ route('abouts.index') }}" class="btn btn-secondary">Manage Abouts</a>
        <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Manage Testimonials</a>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Manage Blogs</a>

    </div>
</div>
@endsection
