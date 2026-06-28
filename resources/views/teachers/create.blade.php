@extends('layouts.app')

@section('content')

    <h2>Add Teacher</h2>

    <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="mb-3">
            <label>Gender</label>

            <select name="gender" class="form-select">
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

        </div>

        <div class="mb-3">
            <label>Date of Birth</label>

            <input type="date" name="date_of_birth" class="form-control">
        </div>

        <div class="mb-3">
            <label>Joining Date</label>

            <input type="date" name="joining_date" class="form-control">
        </div>

        <div class="mb-3">
            <label>Address</label>

            <textarea name="address" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Photo</label>

            <input type="file" name="photo" class="form-control">
        </div>

        <button class="btn btn-primary">
            Save Teacher
        </button>

    </form>

@endsection