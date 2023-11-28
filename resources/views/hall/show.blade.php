@extends('layouts.template')


@section('content')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Hall Details</h2> 
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
            <th>Lecture Hall Name</th>
            <th>Lecture Hall Place</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        
        <tr>
            <td>{{$hall->id }}</td>
            <td>{{$hall->lecture_hall_name}}</td>
            <td>{{$hall->lecture_hall_place}}</td>
            <td>{{$hall->created_at}}</td>
            <td>{{$hall->updated_at}}</td>
        </tr>
        
    </table>
@endsection


@endsection