@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>{{ isset($batch) ? 'Edit' : 'Create' }} batch</h2>
    </div>
    <div class="card-body">
        <form action="{{ isset($batch) ? url('/batches/' . $batch->id) : url('/batches') }}" method="POST">
            {!! csrf_field() !!}
            @if(isset($batch))
                {{ method_field('PUT') }}
            @endif

            <label for="name">Name</label><br />
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name', isset($batch) ? $batch->name : '') }}"><br />

            <label for="course_id">Courses</label><br />
            <!-- <input type="text" class="form-control" id="course_id" name="course_id" placeholder="course_id" value="{{ old('course_id', isset($batch) ? $batch->course_id : '') }}"><br /> -->
            <select name="course_id" class="form-control" id="course_id">
                @foreach($courses as $id => $name)
                <option value="{{$id}}">{{$name}}</option>
                @endforeach
            </select>

            <label for="start_date">Duration</label><br />
            <input type="date" class="form-control" id="start_date" name="start_date" placeholder="start_date" value="{{ old('start_date', isset($batch) ? $batch->start_date : '') }}"><br />

            <input type="submit" value="{{ isset($batch) ? 'Update' : 'Save' }}" class="btn btn-success"><br />
        </form>
    </div>
</div>
@endsection
