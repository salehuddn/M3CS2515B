@extends('layouts.template')


@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Timetable</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary mb-4" href="{{ route('timetables.index') }}">
                    <i class="fa fa-arrow-left fa-sm" aria-hidden="true"></i>
                    Back
                </a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered bg-white">
        <tr>
            <th scope="row" width="30%" class="bg-light">User Id - Name</th>
            <td>{{ $timetable->user->id }} - {{ $timetable->user->name }}</td>
        </tr>
        <tr>
            <th scope="row" class="bg-light">Subject - Subject Code</th>
            <td>{{ $timetable->subject->subject_name }} - {{ $timetable->subject->subject_code }}</td>
        </tr>
        <tr>
            <th scope="row" class="bg-light">Day</th>
            <td>{{ $timetable->day->day_name }}</td>
        </tr>
        <tr>
            <th scope="row" class="bg-light">Hall Name</th>
            <td>{{ $timetable->hall->lecture_hall_place }}</td>
        </tr>
        <tr>
            <th scope="row" class="bg-light">Group</th>
            <td>{{ $timetable->group->name }}</td>
        </tr>
        <tr>
            <th scope="row" class="bg-light">Lecturer</th>
            <td>{{ $timetable->hall->lecture_hall_name }}</td>
        </tr>
        <tr>
            <th scope="row" class="bg-light">Start</th>
            <td>{{ $timetable->time_from }}</td>
        </tr>
        <tr>
            <th scope="row" class="bg-light">End</th>
            <td>{{ $timetable->time_to }}</td>
        </tr>
        <tr>
            <th scope="row" class="bg-light">Created At</th>
            <td>{{ $timetable->created_at->format("d-m-Y h:i A") }}</td>
        </tr>
        <tr>
            <th scope="row" class="bg-light">Updated At</th>
            <td>{{  date_format($timetable->updated_at,"d-m-Y  h:i A") }}</td>
        </tr>
    </table>
@endsection
