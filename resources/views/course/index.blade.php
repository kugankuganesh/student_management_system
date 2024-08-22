@extends('layout')
@section('content')
    
                <div class="card">
                    <div class="card-header">
                        <h2>course Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/courses/create')}}" class="btn btn-success btn-sm" title="Add New course">
                            <i class="fa fa-plus" aria-hidden="ture"></i> Add New
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Syllubus</th>
                                        <th>Duration</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($courses as $course)
                                    <tr>
                                        <td>{{$course->id}}</td>
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->syllubus}}</td>
                                        <td>{{$course->duraion}}</td>
                                        <td>
                                        <a href="{{ url('/courses/' . $course->id) }}" title="View course">
                                            <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                        </a>
                                            <a href="{{ url('/courses/' . $course->id . '/edit') }}" title="Edit course">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                            </a>

                                            <form method="POST" action="{{ url('/courses/' . $course->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete course"
                                                        onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
     
@endsection