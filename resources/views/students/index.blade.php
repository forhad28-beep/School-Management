@extends('layouts.app')

@section('content')

    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">

        Admission

    </a>

    <table class="table table-bordered">

        <thead>

            <tr>

                <th>Photo</th>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Section</th>
                <th>Roll</th>
                <th>Action</th>

            </tr>

        </thead>

        <tbody>

            @foreach($students as $student)

                <tr>

                    <td>

                        @if($student->photo)

                            <img src="{{ asset('storage/' . $student->photo) }}" width="60">

                        @endif

                    </td>

                    <td>{{$student->student_id}}</td>

                    <td>{{$student->name}}</td>

                    <td>{{$student->classRoom->name}}</td>

                    <td>{{$student->section->name}}</td>

                    <td>{{$student->roll}}</td>

                    <td>

                        <a href="{{ route('students.show', $student) }}" class="btn btn-info btn-sm">

                            View

                        </a>

                        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button onclick="return confirm('Delete Student?')" class="btn btn-danger btn-sm">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

@endsection