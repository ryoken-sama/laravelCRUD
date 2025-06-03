@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Dashboard</h1>
    <div class="d-flex gap-3 mt-3">
        <a href="{{ route('companies.index') }}" class="btn btn-primary">Manage Companies</a>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Manage Employees</a>
        <a href="{{ route('posts.index')}}" class="btn btn-secondary">Manage Posts</a>
    </div>
</div>
@endsection
