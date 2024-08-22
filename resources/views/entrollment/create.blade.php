@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>{{ isset($entrollment) ? 'Edit' : 'Create' }} entrollment</h2>
    </div>
    <div class="card-body">
        <form action="{{ isset($entrollment) ? url('/entrollments/' . $entrollment->id) : url('/entrollments') }}" method="POST">
            {!! csrf_field() !!}
            @if(isset($entrollment))
                {{ method_field('PUT') }}
            @endif

            <label for="name">Entrollment No</label><br />
            <input type="text" class="form-control" id="entroll_no" name="entroll_no" placeholder="entroll_no" value="{{ old('entroll_no', isset($entrollment) ? $entrollment->entroll_no : '') }}"><br />

            <label for="syllubus">Batch</label><br />
            <input type="text" class="form-control" id="batch_id" name="batch_id" placeholder="batch_id" value="{{ old('batch_id', isset($entrollment) ? $entrollment->batch_id : '') }}"><br />

            <label for="duration">Student</label><br />
            <input type="text" class="form-control" id="student_id" name="student_id" placeholder="student_id" value="{{ old('student_id', isset($entrollment) ? $entrollment->student_id : '') }}"><br />

            <label for="duration">Join Date</label><br />
            <input type="date" class="form-control" id="join_date" name="join_date" placeholder="join_date" value="{{ old('join_date', isset($entrollment) ? $entrollment->join_date : '') }}"><br />

            <label for="duration">Fee</label><br />
            <input type="text" class="form-control" id="fee" name="fee" placeholder="fee" value="{{ old('fee', isset($entrollment) ? $entrollment->fee : '') }}"><br />

            <input type="submit" value="{{ isset($entrollment) ? 'Update' : 'Save' }}" class="btn btn-success"><br />
        </form>
    </div>
</div>
@endsection
