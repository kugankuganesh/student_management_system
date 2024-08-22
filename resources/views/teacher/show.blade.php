@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Teacher Details</h2>
    </div>
    <div class="card-body">
        <p><strong>Name:</strong> {{ $teachers->name }}</p>
        <p><strong>Address:</strong> {{ $teachers->address }}</p>
        <p><strong>Mobile:</strong> {{ $teachers->mobile }}</p>
        <a href="{{ url('/teachers') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>
@endsection