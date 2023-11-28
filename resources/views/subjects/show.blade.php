@extends('layouts.template')


@section('content')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Subject Details</h2> 
            </div>
            {{-- <div class="pull-right">
                <a class="btn btn-success mb-4" href="{{ route('subject.create') }}"> Add New Student</a>
            </div> --}}
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Subject Code</th>
            <th>Subject Name</th>
            <th>Lecturer Name</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        
        <tr>
            <td>{{ $subject->id }}</td>
            <td>{{$subject->subject_code}}</td>
            <td>{{$subject->subject_name}}</td>
            <td>{{$subject->lecturer_name}}</td>
            <td>{{$subject->created_at}}</td>
            <td>{{$subject->updated_at}}</td>
        </tr>
        
    </table>
@endsection


@endsection