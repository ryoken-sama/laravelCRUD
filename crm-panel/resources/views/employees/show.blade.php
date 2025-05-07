@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Employee Details</h1>
    <ul>
        <li>First Name: {{ $employee->first_name }}</li>
        <li>Last Name: {{ $employee->last_name }}</li>
        <li>Company: {{ $employee->company->name ?? 'N/A' }}</li>
        <li>Email: {{ $employee->email }}</li>
        <li>Phone: {{ $employee->phone }}</li>
    </ul>
    <a href="{{ route('employees.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
