@extends('layouts.app')

@section('content')

    <div class="container">

        <h2 class="mb-4">Student Details</h2>

        <div class="card">

            <div class="card-body">

                <div class="text-center mb-4">

                    @if($student->photo)

                        <img src="{{ asset('storage/' . $student->photo) }}" width="150" class="rounded-circle border">

                    @else

                        <img src="https://via.placeholder.com/150" class="rounded-circle">

                    @endif

                </div>

                <table class="table table-bordered">

                    <tr>
                        <th>Student ID</th>
                        <td>{{ $student->student_id }}</td>
                    </tr>

                    <tr>
                        <th>Name</th>
                        <td>{{ $student->name }}</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>{{ $student->email }}</td>
                    </tr>

                    <tr>
                        <th>Phone</th>
                        <td>{{ $student->phone }}</td>
                    </tr>

                    <tr>
                        <th>Gender</th>
                        <td>{{ $student->gender }}</td>
                    </tr>

                    <tr>
                        <th>Class</th>
                        <td>{{ $student->classRoom->name }}</td>
                    </tr>

                    <tr>
                        <th>Section</th>
                        <td>{{ $student->section->name }}</td>
                    </tr>

                    <tr>
                        <th>Roll</th>
                        <td>{{ $student->roll }}</td>
                    </tr>

                    <tr>
                        <th>Father Name</th>
                        <td>{{ $student->father_name }}</td>
                    </tr>

                    <tr>
                        <th>Mother Name</th>
                        <td>{{ $student->mother_name }}</td>
                    </tr>

                    <tr>
                        <th>Guardian Phone</th>
                        <td>{{ $student->guardian_phone }}</td>
                    </tr>

                    <tr>
                        <th>Date Of Birth</th>
                        <td>{{ $student->date_of_birth }}</td>
                    </tr>

                    <tr>
                        <th>Admission Date</th>
                        <td>{{ $student->admission_date }}</td>
                    </tr>

                    <tr>
                        <th>Address</th>
                        <td>{{ $student->address }}</td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>

                            @if($student->status)

                                <span class="badge bg-success">Active</span>

                            @else

                                <span class="badge bg-danger">Inactive</span>

                            @endif

                        </td>
                    </tr>

                </table>

                <a href="{{ route('students.index') }}" class="btn btn-secondary">

                    Back

                </a>

            </div>

        </div>

    </div>

@endsection