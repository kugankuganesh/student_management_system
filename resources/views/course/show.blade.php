@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>course Details</h2>
    </div>
    <div class="card-body">
        <p><strong>Name:</strong> {{ $courses->name }}</p>
        <p><strong>Syllubus:</strong> {{ $courses->syllubus }}</p>
        <p><strong>Duration:</strong> {{ $courses->duraion() }}</p>
        <a href="{{ url('/courses') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>
@endsection