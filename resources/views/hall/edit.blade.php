@extends('layouts.template')

@section('content')

<div class="container mt-5">
    {{-- @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif --}}

    <form id="updateForm" action="{{ route('halls.update', $hall->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" name="lecture_hall_name" id="lecture_hall_name" class="form-control" value="{{ $hall->lecture_hall_name ?? '' }}">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Part</label>
            <input type="text" name="lecture_hall_place" id="lecture_hall_place" class="form-control" value="{{ $hall->lecture_hall_place ?? '' }}">
        </div>

        

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary btn-lg" onclick="submitForm()">Save</button>
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