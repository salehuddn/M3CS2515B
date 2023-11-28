@extends('layouts.template')


@section('content')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Group Details</h2> 
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
            <th>Name</th>
            <th>Part</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        
        <tr>
            <td>{{$group->id }}</td>
            <td>{{$group->name}}</td>
            <td>{{$group->part}}</td>
            <td>{{$group->created_at}}</td>
            <td>{{$group->updated_at}}</td>
        </tr>
        
    </table>
@endsection


@endsection