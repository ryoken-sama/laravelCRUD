@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $preparation->title }}</h1>

    <div class="mb-4">
        <p>{{ $preparation->content }}</p>
    </div>

    <a href="{{ route('preparations.edit', $preparation->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('preparations.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
