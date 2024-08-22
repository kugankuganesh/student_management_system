@extends('layout')
@section('content')
    
                <div class="card">
                    <div class="card-header">
                        <h2>entrollment Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/entrollments/create')}}" class="btn btn-success btn-sm" title="Add New entrollment">
                            <i class="fa fa-plus" aria-hidden="ture"></i> Add New
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Entrollment No</th>
                                        <th>Batch</th>
                                        <th>Student</th>
                                        <th>Join Date</th>
                                        <th>Fee</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($entrollments as $entrollment)
                                    <tr>
                                        <td>{{$entrollment->id}}</td>
                                        <td>{{$entrollment->entroll_no}}</td>
                                        <td>{{$entrollment->batch->name}}</td>
                                        <td>{{$entrollment->student->name}}</td>
                                        <td>{{$entrollment->join_date}}</td>
                                        <td>{{$entrollment->fee}}</td>
                                        <td>
                                        <a href="{{ url('/entrollments/' . $entrollment->id) }}" title="View entrollment">
                                            <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                        </a>
                                            <a href="{{ url('/entrollments/' . $entrollment->id . '/edit') }}" title="Edit entrollment">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                            </a>

                                            <form method="POST" action="{{ url('/entrollments/' . $entrollment->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete entrollment"
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