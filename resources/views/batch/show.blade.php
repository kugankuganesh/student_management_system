@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>batch Details</h2>
    </div>
    <div class="card-body">
        <p><strong>Name:</strong> {{ $batches->name }}</p>
        <p><strong>Course:</strong> {{ $batches->course->name }}</p>
        <p><strong>start_date:</strong> {{ $batches->start_date }}</p>
        <a href="{{ url('/batches') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>
@endsection