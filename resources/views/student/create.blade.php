@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>{{ isset($student) ? 'Edit' : 'Create' }} Student</h2>
    </div>
    <div class="card-body">
        <form action="{{ isset($student) ? url('/students/' . $student->id) : url('/students') }}" method="POST">
            {!! csrf_field() !!}
            @if(isset($student))
                {{ method_field('PUT') }}
            @endif

            <label for="name">Name</label><br />
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name', isset($student) ? $student->name : '') }}"><br />

            <label for="address">Address</label><br />
            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{ old('address', isset($student) ? $student->address : '') }}"><br />

            <label for="mobile">Mobile</label><br />
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="{{ old('mobile', isset($student) ? $student->mobile : '') }}"><br />

            <input type="submit" value="{{ isset($student) ? 'Update' : 'Save' }}" class="btn btn-success"><br />
        </form>
    </div>
</div>
@endsection
