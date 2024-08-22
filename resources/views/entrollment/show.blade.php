@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>entrollment Details</h2>
    </div>
    <div class="card-body">
        <p><strong>Name:</strong> {{ $entrollments->name }}</p>
        <p><strong>Entroll No:</strong> {{ $entrollments->batch->name }}</p>
        <p><strong>Student:</strong> {{ $entrollments->student->name }}</p>
        <p><strong>Join Date:</strong> {{ $entrollments->join_date }}</p>
        <p><strong>Fee:</strong> {{ $entrollments->fee }}</p>

        <a href="{{ url('/entrollments') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>
@endsection