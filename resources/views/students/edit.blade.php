@extends('layouts.template')

@section('content')

<div class="container mt-5">
    {{-- @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif --}}

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $student->name ?? '' }}">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="{{ $student->email ?? '' }}">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Phone Number</label>
            <input type="text" name="phone_num" id="phone_num" class="form-control" value="{{ $student->phone_number ?? '' }}">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" class="form-control">{{ $student->address ?? '' }}</textarea>
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
