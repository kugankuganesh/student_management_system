@extends('layout')
@section('content')
    
                <div class="card">
                    <div class="card-header">
                        <h2>batch Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/batches/create')}}" class="btn btn-success btn-sm" title="Add New batch">
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
                                        <th>Course</th>
                                        <th>start_date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($batches as $batch)
                                    <tr>
                                        <td>{{$batch->id}}</td>
                                        <td>{{$batch->name}}</td>
                                        <td>{{$batch->course->name}}</td>
                                        <td>{{$batch->start_date}}</td>
                                        <td>
                                        <a href="{{ url('/batches/' . $batch->id) }}" title="View batch">
                                            <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                        </a>
                                            <a href="{{ url('/batches/' . $batch->id . '/edit') }}" title="Edit batch">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                            </a>

                                            <form method="POST" action="{{ url('/batches/' . $batch->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete batch"
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