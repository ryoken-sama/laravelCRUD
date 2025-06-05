@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $service->title }}</h1>
    <p>{{ $service->description }}</p>

    @if($service->image)
        <img src="{{ asset('storage/' . $service->image) }}" width="300">
    @endif

    @if($service->button_url)
        <p><a href="{{ $service->button_url }}" target="_blank" class="btn btn-info">Visit</a></p>
    @endif
</div>
@endsection
