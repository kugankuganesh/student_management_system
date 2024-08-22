@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>{{ isset($course) ? 'Edit' : 'Create' }} course</h2>
    </div>
    <div class="card-body">
        <form action="{{ isset($course) ? url('/courses/' . $course->id) : url('/courses') }}" method="POST">
            {!! csrf_field() !!}
            @if(isset($course))
                {{ method_field('PUT') }}
            @endif

            <label for="name">Name</label><br />
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name', isset($course) ? $course->name : '') }}"><br />

            <label for="syllubus">Syllubus</label><br />
            <input type="text" class="form-control" id="syllubus" name="syllubus" placeholder="syllubus" value="{{ old('syllubus', isset($course) ? $course->syllubus : '') }}"><br />

            <label for="duration">Duration</label><br />
            <input type="text" class="form-control" id="duraion" name="duraion" placeholder="duraion" value="{{ old('duraion', isset($course) ? $course->duraion : '') }}"><br />

            <input type="submit" value="{{ isset($course) ? 'Update' : 'Save' }}" class="btn btn-success"><br />
        </form>
    </div>
</div>
@endsection
