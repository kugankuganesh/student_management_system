@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>{{ isset($payment) ? 'Edit' : 'Create' }} Payment</h2>
    </div>
    <div class="card-body">
        <form action="{{ isset($payment) ? url('/payments/' . $payment->id) : url('/payments') }}" method="POST">
            {!! csrf_field() !!}
            @if(isset($payment))
                {{ method_field('PUT') }}
            @endif

            <label for="name">Entroll No</label><br />
            <select name="entrollment_id" class="form-control" id="entrollment_id">
                @foreach($entrollments as $id => $entroll_no)
                <option value="{{$id}}">{{$entroll_no}}</option>
                @endforeach
            </select>
            
            
            <label for="paid_date">Paid Date</label><br />
            <input type="date" class="form-control" id="paid_date" name="paid_date" placeholder="paid_date" value="{{ old('paid_date', isset($payment) ? $payment->paid_date : '') }}"><br />
            <label for="course_id">Amount</label><br />
            <input type="text" class="form-control" id="amount" name="amount" placeholder="amount" value="{{ old('amount', isset($payment) ? $payment->amount : '') }}"><br />

            <input type="submit" value="{{ isset($payment) ? 'Update' : 'Save' }}" class="btn btn-success"><br />
        </form>
    </div>
</div>
@endsection
