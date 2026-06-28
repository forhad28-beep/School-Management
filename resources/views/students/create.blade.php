@extends('layouts.app')

@section('content')

    <h2>Student Admission</h2>

    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="row">

            <div class="col-md-6">

                <label>Class</label>

                <select name="class_room_id" class="form-select">

                    @foreach($classes as $class)

                        <option value="{{$class->id}}">
                            {{$class->name}}
                        </option>

                    @endforeach

                </select>

            </div>

            <div class="col-md-6">

                <label>Section</label>

                <select name="section_id" class="form-select">

                    @foreach($sections as $section)

                        <option value="{{$section->id}}">
                            {{$section->name}}
                        </option>

                    @endforeach

                </select>

            </div>

            <div class="col-md-6 mt-3">

                <label>Roll</label>

                <input type="text" name="roll" class="form-control">

            </div>

            <div class="col-md-6 mt-3">

                <label>Name</label>

                <input type="text" name="name" class="form-control">

            </div>

            <div class="col-md-6 mt-3">

                <label>Email</label>

                <input type="email" name="email" class="form-control">

            </div>

            <div class="col-md-6 mt-3">

                <label>Phone</label>

                <input type="text" name="phone" class="form-control">

            </div>

            <div class="col-md-6 mt-3">

                <label>Gender</label>

                <select name="gender" class="form-select">

                    <option>Male</option>
                    <option>Female</option>

                </select>

            </div>

            <div class="col-md-6 mt-3">

                <label>Date Of Birth</label>

                <input type="date" name="date_of_birth" class="form-control">

            </div>

            <div class="col-md-6 mt-3">

                <label>Father Name</label>

                <input type="text" name="father_name" class="form-control">

            </div>

            <div class="col-md-6 mt-3">

                <label>Mother Name</label>

                <input type="text" name="mother_name" class="form-control">

            </div>

            <div class="col-md-6 mt-3">

                <label>Guardian Phone</label>

                <input type="text" name="guardian_phone" class="form-control">

            </div>

            <div class="col-md-6 mt-3">

                <label>Admission Date</label>

                <input type="date" name="admission_date" class="form-control">

            </div>

            <div class="col-12 mt-3">

                <label>Address</label>

                <textarea name="address" class="form-control"></textarea>

            </div>

            <div class="col-12 mt-3">

                <label>Photo</label>

                <input type="file" name="photo" class="form-control">

            </div>

            <div class="col-12 mt-4">

                <button class="btn btn-primary">

                    Save Student

                </button>

            </div>

        </div>

    </form>

@endsection