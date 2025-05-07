@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Company Details</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>Name:</strong> {{ $company->name }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $company->email }}</li>
        <li class="list-group-item">
            <strong>Logo:</strong> 
            @if($company->logo)
                <img src="{{ Storage::url($company->logo) }}" alt="Logo" width="100">
            @else
                N/A
            @endif
        </li>
        <li class="list-group-item"><strong>Website:</strong> {{ $company->website }}</li>
    </ul>
    <a href="{{ route('companies.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
