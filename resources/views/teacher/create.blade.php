@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>{{ isset($teacher) ? 'Edit' : 'Create' }} teacher</h2>
    </div>
    <div class="card-body">
        <form action="{{ isset($teacher) ? url('/teachers/' . $teacher->id) : url('/teachers') }}" method="POST">
            {!! csrf_field() !!}
            @if(isset($teacher))
                {{ method_field('PUT') }}
            @endif

            <label for="name">Name</label><br />
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name', isset($teacher) ? $teacher->name : '') }}"><br />

            <label for="address">Address</label><br />
            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{ old('address', isset($teacher) ? $teacher->address : '') }}"><br />

            <label for="mobile">Mobile</label><br />
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="{{ old('mobile', isset($teacher) ? $teacher->mobile : '') }}"><br />

            <input type="submit" value="{{ isset($teacher) ? 'Update' : 'Save' }}" class="btn btn-success"><br />
        </form>
    </div>
</div>
@endsection
