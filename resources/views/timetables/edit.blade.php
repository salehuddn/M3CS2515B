@extends('layouts.template')

@section('content')

<div class="container mt-5">
    {{-- @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif --}}

    <form action="{{ route('timetables.update', $timetable->id) }}" method="POST" id="updateForm">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for="user_id">User</label>
          <select name="user_id" id="user_id" class="form-control">
              <option value="{{ $timetable->user->id ?? '' }}" selected>{{ $timetable->user->name ?? '' }} - {{ $timetable->user->email ?? '' }}</option>
              @foreach($students as $student)
                  @if($timetable->user && $student->id == $timetable->user->id)
                      <!-- Skip this iteration, as the user is already selected -->
                      @continue
                  @endif
                  <option value="{{ $student->id }}">{{ $student->name }} - {{ $student->email }}</option>
              @endforeach
          </select>
        </div>
      

        <div class="form-group">
            <label for="subject_id">Subject</label>
            <select name="subject_id" id="subject_id" class="form-control">
                <option value="{{ $timetable->subject->id ?? '' }}" selected>{{ $timetable->subject->subject_code ?? '' }} - {{ $timetable->subject->subject_name ?? '' }}</option>
                @foreach($subjects as $subject)
                    @if($timetable->subject && $subject->id == $timetable->subject->id)
                        <!-- Skip this iteration, as the user is already selected -->
                        @continue
                    @endif
                    <option value="{{ $subject->id }}">{{ $subject->subject_code }} - {{ $subject->subject_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="subject_id">Subject</label>
            <select name="subject_id" id="subject_id" class="form-control">
                <option value="{{ $timetable->subject->id ?? '' }}" selected>{{ $timetable->subject->subject_code ?? '' }} - {{ $timetable->subject->subject_name ?? '' }}</option>
                @foreach($days as $day)
                    @if($timetable->day && $day->id == $timetable->day->id)
                        <!-- Skip this iteration, as the user is already selected -->
                        @continue
                    @endif
                    <option value="{{ $day->id }}">{{ $day->subject_code }} - {{ $day->day_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="day_id">Day</label>
            <select name="day_id" id="day_id" class="form-control">
                <option value="{{ $timetable->day->id ?? '' }}" selected>{{ $timetable->day->day_name ?? '' }}</option>
                @foreach($days as $day)
                    @if($timetable->day && $day->id == $timetable->day->id)
                        <!-- Skip this iteration, as the user is already selected -->
                        @continue
                    @endif
                    <option value="{{ $day->id }}">{{ $day->day_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="hall_id">Hall</label>
            <select name="hall_id" id="hall_id" class="form-control">
                <option value="{{ $timetable->hall->id ?? '' }}" selected>{{ $timetable->hall->lecture_hall_name ?? '' }}</option>
                @foreach($halls as $hall)
                    @if($timetable->hall && $hall->id == $timetable->hall->id)
                        <!-- Skip this iteration, as the user is already selected -->
                        @continue
                    @endif
                    <option value="{{ $hall->id }}">{{ $hall->lecture_hall_name }} - {{ $hall->lecture_hall_place }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="lecturer_group_id">Lecturer</label>
            <select name="lecturer_group_id" id="lecturer_group_id" class="form-control">
                <option value="{{ $timetable->group->id ?? '' }}" selected>{{ $timetable->group->name ?? '' }} - {{ $timetable->group->part ?? '' }}</option>
                @foreach($groups as $group)
                    @if($timetable->group && $group->id == $timetable->group->id)
                        <!-- Skip this iteration, as the user is already selected -->
                        @continue
                    @endif
                    <option value="{{ $group->id }}">{{ $group->name }} - {{ $group->part }}</option>
                @endforeach
            </select>
        </div>
        

        <div class="mb-3">
            <label for="name" class="form-label">Start</label>
            <input type="text" name="time_from" id="time_from" class="form-control" value="{{ $timetable->time_from }}">
        </div>
        
        <div class="mb-3">
            <label for="name" class="form-label">End</label>
            <input type="text" name="time_to" id="time_to" class="form-control" value="{{ $timetable->time_to }}">
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit"
                class="btn btn-primary btn-lg">{{-- Adjust the button style as needed --}}
                Save
            </button>
        </div>
    </form>
</div>
<script>
    function submitForm() {
        // Submit the form
        document.getElementById('updateForm').submit();

        // Show a popup message
        alert('Form submitted successfully!');
    }
</script>

@endsection
