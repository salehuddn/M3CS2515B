@extends('layouts.template')

@section('content')

<div class="container mt-5">
    {{-- @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif --}}

    <form action="{{ route('timetables.update', $timetable->id) }}" method="POST">
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
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->subject_code }} - {{ $subject->subject_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="day_id">Day</label>
            <select name="day_id" id="day_id" class="form-control">
                @foreach($days as $day)
                <option value="{{ $day->id }}">{{ $day->day_name }} </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="hall_id">Hall</label>
            <select name="hall_id" id="hall_id" class="form-control">
                @foreach($halls as $hall)
                    <option value="{{ $hall->id }}">{{ $hall->lecture_hall_name }} - {{ $hall->lecture_hall_place }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="lecturer_group_id">Lecturer</label>
            <select name="lecturer_group_id" id="lecturer_group_id" class="form-control">
                @foreach($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->name }} - {{ $group->part }}</option>
                @endforeach
            </select>
        </div>
        

        <div class="mb-3">
            <label for="name" class="form-label">Start</label>
            <input type="text" name="time_from" id="time_from" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="name" class="form-label">End</label>
            <input type="text" name="time_to" id="time_to" class="form-control">
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
        alert('Form submitted successfully!'); // You can replace this with a more sophisticated popup/modal
    }
</script>

@endsection
