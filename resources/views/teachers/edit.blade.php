@extends('layouts.app')

@section('content')

    <h2>Edit Teacher</h2>

    <form action="{{ route('teachers.update', $teacher) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Name</label>

            <input type="text" name="name" class="form-control" value="{{ old('name', $teacher->name) }}">

        </div>

        <div class="mb-3">

            <label>Email</label>

            <input type="email" name="email" class="form-control" value="{{ old('email', $teacher->email) }}">

        </div>

        <div class="mb-3">

            <label>Phone</label>

            <input type="text" name="phone" class="form-control" value="{{ old('phone', $teacher->phone) }}">

        </div>

        <div class="mb-3">

            <label>Gender</label>

            <select name="gender" class="form-select">

                <option value="Male" {{ $teacher->gender == 'Male' ? 'selected' : '' }}>

                    Male

                </option>

                <option value="Female" {{ $teacher->gender == 'Female' ? 'selected' : '' }}>

                    Female

                </option>

            </select>

        </div>

        <div class="mb-3">

            <label>Date Of Birth</label>

            <input type="date" name="date_of_birth" class="form-control" value="{{ $teacher->date_of_birth }}">

        </div>

        <div class="mb-3">

            <label>Joining Date</label>

            <input type="date" name="joining_date" class="form-control" value="{{ $teacher->joining_date }}">

        </div>

        <div class="mb-3">

            <label>Address</label>

            <textarea name="address" class="form-control">{{ $teacher->address }}</textarea>

        </div>

        @if($teacher->photo)

            <img src="{{ asset('storage/' . $teacher->photo) }}" width="100" class="mb-3">

        @endif

        <div class="mb-3">

            <label>Photo</label>

            <input type="file" name="photo" class="form-control">

        </div>

        <button class="btn btn-success">

            Update Teacher

        </button>

    </form>

@endsection