@extends('layouts.app')

@section('content')

<div class="container">

<h2 class="mb-4">Edit Student</h2>

<form action="{{ route('students.update',$student) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="row">

        <div class="col-md-6 mb-3">

            <label>Class</label>

            <select name="class_room_id" class="form-select">

                @foreach($classes as $class)

                <option value="{{ $class->id }}"
                    {{ $student->class_room_id == $class->id ? 'selected' : '' }}>

                    {{ $class->name }}

                </option>

                @endforeach

            </select>

        </div>

        <div class="col-md-6 mb-3">

            <label>Section</label>

            <select name="section_id" class="form-select">

                @foreach($sections as $section)

                <option value="{{ $section->id }}"
                    {{ $student->section_id == $section->id ? 'selected' : '' }}>

                    {{ $section->name }}

                </option>

                @endforeach

            </select>

        </div>

        <div class="col-md-6 mb-3">

            <label>Roll</label>

            <input type="text"
                   name="roll"
                   value="{{ old('roll',$student->roll) }}"
                   class="form-control">

        </div>

        <div class="col-md-6 mb-3">

            <label>Name</label>

            <input type="text"
                   name="name"
                   value="{{ old('name',$student->name) }}"
                   class="form-control">

        </div>

        <div class="col-md-6 mb-3">

            <label>Email</label>

            <input type="email"
                   name="email"
                   value="{{ old('email',$student->email) }}"
                   class="form-control">

        </div>

        <div class="col-md-6 mb-3">

            <label>Phone</label>

            <input type="text"
                   name="phone"
                   value="{{ old('phone',$student->phone) }}"
                   class="form-control">

        </div>

        <div class="col-md-6 mb-3">

            <label>Gender</label>

            <select name="gender" class="form-select">

                <option value="Male"
                {{ $student->gender=='Male' ? 'selected':'' }}>

                    Male

                </option>

                <option value="Female"
                {{ $student->gender=='Female' ? 'selected':'' }}>

                    Female

                </option>

            </select>

        </div>

        <div class="col-md-6 mb-3">

            <label>Date Of Birth</label>

            <input type="date"
                   name="date_of_birth"
                   value="{{ $student->date_of_birth }}"
                   class="form-control">

        </div>

        <div class="col-md-6 mb-3">

            <label>Father Name</label>

            <input type="text"
                   name="father_name"
                   value="{{ $student->father_name }}"
                   class="form-control">

        </div>

        <div class="col-md-6 mb-3">

            <label>Mother Name</label>

            <input type="text"
                   name="mother_name"
                   value="{{ $student->mother_name }}"
                   class="form-control">

        </div>

        <div class="col-md-6 mb-3">

            <label>Guardian Phone</label>

            <input type="text"
                   name="guardian_phone"
                   value="{{ $student->guardian_phone }}"
                   class="form-control">

        </div>

        <div class="col-md-6 mb-3">

            <label>Admission Date</label>

            <input type="date"
                   name="admission_date"
                   value="{{ $student->admission_date }}"
                   class="form-control">

        </div>

        <div class="col-md-12 mb-3">

            <label>Address</label>

            <textarea
                name="address"
                class="form-control">{{ $student->address }}</textarea>

        </div>

        @if($student->photo)

        <div class="mb-3">

            <img src="{{ asset('storage/'.$student->photo) }}"
                 width="120"
                 class="rounded">

        </div>

        @endif

        <div class="mb-3">

            <label>Photo</label>

            <input type="file"
                   name="photo"
                   class="form-control">

        </div>

        <div>

            <button class="btn btn-success">

                Update Student

            </button>

        </div>

    </div>

</form>

</div>

@endsection