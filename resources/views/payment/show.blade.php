@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>payment Details</h2>
    </div>
    <div class="card-body">
        <p><strong>Name:</strong> {{ $payments->name }}</p>
        <p><strong>Entroll No:</strong> {{ $payments->entrollment->entroll_no }}</p>
        <p><strong>Paid Date:</strong> {{ $payments->paid_date}}</p>
        <p><strong>Join Date:</strong> {{ $payments->amount }}</p>

        <a href="{{ url('/payments') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>
@endsection