@extends('layouts.template')


@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Timetables</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success mb-4" href="{{ route('timetables.create') }}"> Add New Timetable</a>
            </div>
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
            <th>User Id - Name</th>
            <th>Subject - Subject Code</th>
            <th>Day</th>
            <th>Hall Name</th>
            <th>Lecturer</th>
            <th>Start</th>
            <th>End</th>
            <th>Created At</th>
            <th>Updated At</th>
            
        </tr>
        
        <tr>
            <td>{{ $timetable->id }} </td>
            <td>{{ $timetable->user->name }}</td>
            <td>{{ $timetable->subject->subject_code }}</td>
            <td>{{ $timetable->day->day_name }}</td>
            <td>{{ $timetable->hall->lecture_hall_name }}</td>
            <td>{{ $timetable->group->name }}</td>
            <td>{{ $timetable->time_from }}</td>
            <td>{{ $timetable->time_to }}</td>
            <td>{{  date_format($timetable->created_at,"d-m-Y");
            }}</td>
            <td>{{  date_format($timetable->updated_at,"d-m-Y");
            }}</td>
            
        </tr>
        
    </table>
@endsection
