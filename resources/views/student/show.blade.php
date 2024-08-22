@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Student Details</h2>
    </div>
    <div class="card-body">
        <p><strong>Name:</strong> {{ $students->name }}</p>
        <p><strong>Address:</strong> {{ $students->address }}</p>
        <p><strong>Mobile:</strong> {{ $students->mobile }}</p>
        <a href="{{ url('/students') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>
@endsection